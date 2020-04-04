<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MWriter;
    
    //=======================================================================
    class MWritersController extends Controller
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
				// -- QueryBuilder: SELECT [m_writers]--
				// ----------------------------------------------------
				$m_writer = DB::table("m_writers")
				->leftJoin("m_writer_roles","m_writer_roles.id", "=", "m_writers.id_m_writer_roles")
				->orWhere("m_writers.name", "LIKE", "%$keyword%")->orWhere("m_writers.email", "LIKE", "%$keyword%")->orWhere("m_writers.id_m_writer_roles", "LIKE", "%$keyword%")->orWhere("m_writer_roles.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_writers.id")->paginate($perPage);
            } else {
                    //$m_writer = MWriter::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_writers]--
				// ----------------------------------------------------
				$m_writer = DB::table("m_writers")
				->leftJoin("m_writer_roles","m_writer_roles.id", "=", "m_writers.id_m_writer_roles")
				->select("*")->addSelect("m_writers.id")->paginate($perPage);              
            }          
            return view("m_writer.index", compact("m_writer"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_writer.create");
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
				"email" => "nullable", //text('email')->nullable()
				"id_m_writer_roles" => "nullable|integer", //integer('id_m_writer_roles')->nullable()

            ]);
            $requestData = $request->all();
            
            MWriter::create($requestData);
    
            return redirect("m_writer")->with("flash_message", "m_writer added!");
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
            //$m_writer = MWriter::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_writers]--
				// ----------------------------------------------------
				$m_writer = DB::table("m_writers")
				->leftJoin("m_writer_roles","m_writer_roles.id", "=", "m_writers.id_m_writer_roles")
				->select("*")->addSelect("m_writers.id")->where("m_writers.id",$id)->first();
            return view("m_writer.show", compact("m_writer"));
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
            $m_writer = MWriter::findOrFail($id);
    
            return view("m_writer.edit", compact("m_writer"));
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
				"email" => "nullable", //text('email')->nullable()
				"id_m_writer_roles" => "nullable|integer", //integer('id_m_writer_roles')->nullable()

            ]);
            $requestData = $request->all();
            
            $m_writer = MWriter::findOrFail($id);
            $m_writer->update($requestData);
    
            return redirect("m_writer")->with("flash_message", "m_writer updated!");
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
            MWriter::destroy($id);
    
            return redirect("m_writer")->with("flash_message", "m_writer deleted!");
        }
    }
    //=======================================================================
    
    