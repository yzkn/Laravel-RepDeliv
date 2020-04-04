<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MReaderRole;
    
    //=======================================================================
    class MReaderRolesController extends Controller
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
				// -- QueryBuilder: SELECT [m_reader_roles]--
				// ----------------------------------------------------
				$m_reader_role = DB::table("m_reader_roles")
				->orWhere("m_reader_roles.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_reader_roles.id")->paginate($perPage);
            } else {
                    //$m_reader_role = MReaderRole::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_reader_roles]--
				// ----------------------------------------------------
				$m_reader_role = DB::table("m_reader_roles")
				->select("*")->addSelect("m_reader_roles.id")->paginate($perPage);              
            }          
            return view("m_reader_role.index", compact("m_reader_role"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_reader_role.create");
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

            ]);
            $requestData = $request->all();
            
            MReaderRole::create($requestData);
    
            return redirect("m_reader_role")->with("flash_message", "m_reader_role added!");
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
            //$m_reader_role = MReaderRole::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_reader_roles]--
				// ----------------------------------------------------
				$m_reader_role = DB::table("m_reader_roles")
				->select("*")->addSelect("m_reader_roles.id")->where("m_reader_roles.id",$id)->first();
            return view("m_reader_role.show", compact("m_reader_role"));
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
            $m_reader_role = MReaderRole::findOrFail($id);
    
            return view("m_reader_role.edit", compact("m_reader_role"));
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

            ]);
            $requestData = $request->all();
            
            $m_reader_role = MReaderRole::findOrFail($id);
            $m_reader_role->update($requestData);
    
            return redirect("m_reader_role")->with("flash_message", "m_reader_role updated!");
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
            MReaderRole::destroy($id);
    
            return redirect("m_reader_role")->with("flash_message", "m_reader_role deleted!");
        }
    }
    //=======================================================================
    
    