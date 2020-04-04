<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MWriterRole;
    
    //=======================================================================
    class MWriterRolesController extends Controller
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
				// -- QueryBuilder: SELECT [m_writer_roles]--
				// ----------------------------------------------------
				$m_writer_role = DB::table("m_writer_roles")
				->orWhere("m_writer_roles.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_writer_roles.id")->paginate($perPage);
            } else {
                    //$m_writer_role = MWriterRole::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_writer_roles]--
				// ----------------------------------------------------
				$m_writer_role = DB::table("m_writer_roles")
				->select("*")->addSelect("m_writer_roles.id")->paginate($perPage);              
            }          
            return view("m_writer_role.index", compact("m_writer_role"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_writer_role.create");
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
            
            MWriterRole::create($requestData);
    
            return redirect("m_writer_role")->with("flash_message", "m_writer_role added!");
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
            //$m_writer_role = MWriterRole::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_writer_roles]--
				// ----------------------------------------------------
				$m_writer_role = DB::table("m_writer_roles")
				->select("*")->addSelect("m_writer_roles.id")->where("m_writer_roles.id",$id)->first();
            return view("m_writer_role.show", compact("m_writer_role"));
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
            $m_writer_role = MWriterRole::findOrFail($id);
    
            return view("m_writer_role.edit", compact("m_writer_role"));
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
            
            $m_writer_role = MWriterRole::findOrFail($id);
            $m_writer_role->update($requestData);
    
            return redirect("m_writer_role")->with("flash_message", "m_writer_role updated!");
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
            MWriterRole::destroy($id);
    
            return redirect("m_writer_role")->with("flash_message", "m_writer_role deleted!");
        }
    }
    //=======================================================================
    
    