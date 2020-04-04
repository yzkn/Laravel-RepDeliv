<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MStatusType;
    
    //=======================================================================
    class MStatusTypesController extends Controller
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
				// -- QueryBuilder: SELECT [m_status_types]--
				// ----------------------------------------------------
				$m_status_type = DB::table("m_status_types")
				->orWhere("m_status_types.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_status_types.id")->paginate($perPage);
            } else {
                    //$m_status_type = MStatusType::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_status_types]--
				// ----------------------------------------------------
				$m_status_type = DB::table("m_status_types")
				->select("*")->addSelect("m_status_types.id")->paginate($perPage);              
            }          
            return view("m_status_type.index", compact("m_status_type"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_status_type.create");
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
            
            MStatusType::create($requestData);
    
            return redirect("m_status_type")->with("flash_message", "m_status_type added!");
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
            //$m_status_type = MStatusType::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_status_types]--
				// ----------------------------------------------------
				$m_status_type = DB::table("m_status_types")
				->select("*")->addSelect("m_status_types.id")->where("m_status_types.id",$id)->first();
            return view("m_status_type.show", compact("m_status_type"));
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
            $m_status_type = MStatusType::findOrFail($id);
    
            return view("m_status_type.edit", compact("m_status_type"));
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
            
            $m_status_type = MStatusType::findOrFail($id);
            $m_status_type->update($requestData);
    
            return redirect("m_status_type")->with("flash_message", "m_status_type updated!");
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
            MStatusType::destroy($id);
    
            return redirect("m_status_type")->with("flash_message", "m_status_type deleted!");
        }
    }
    //=======================================================================
    
    