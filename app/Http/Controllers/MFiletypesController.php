<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MFiletype;
    
    //=======================================================================
    class MFiletypesController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $perPage = 25;
    
            if (!empty($keyword)) {
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_filetypes]--
				// ----------------------------------------------------
				$m_filetype = DB::table("m_filetypes")
				->orWhere("m_filetypes.name", "LIKE", "%$keyword%")->orWhere("m_filetypes.extension", "LIKE", "%$keyword%")->select("*")->addSelect("m_filetypes.id")->paginate($perPage);
            } else {
                    //$m_filetype = MFiletype::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_filetypes]--
				// ----------------------------------------------------
				$m_filetype = DB::table("m_filetypes")
				->select("*")->addSelect("m_filetypes.id")->paginate($perPage);              
            }          
            return view("m_filetype.index", compact("m_filetype"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_filetype.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"name" => "nullable", //text('name')->nullable()
				"extension" => "nullable", //text('extension')->nullable()

            ]);
            $requestData = $request->all();
            
            MFiletype::create($requestData);
    
            return redirect("m_filetype")->with("flash_message", "m_filetype added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            //$m_filetype = MFiletype::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_filetypes]--
				// ----------------------------------------------------
				$m_filetype = DB::table("m_filetypes")
				->select("*")->addSelect("m_filetypes.id")->where("m_filetypes.id",$id)->first();
            return view("m_filetype.show", compact("m_filetype"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $m_filetype = MFiletype::findOrFail($id);
    
            return view("m_filetype.edit", compact("m_filetype"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"name" => "nullable", //text('name')->nullable()
				"extension" => "nullable", //text('extension')->nullable()

            ]);
            $requestData = $request->all();
            
            $m_filetype = MFiletype::findOrFail($id);
            $m_filetype->update($requestData);
    
            return redirect("m_filetype")->with("flash_message", "m_filetype updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            MFiletype::destroy($id);
    
            return redirect("m_filetype")->with("flash_message", "m_filetype deleted!");
        }
    }
    //=======================================================================
    
    