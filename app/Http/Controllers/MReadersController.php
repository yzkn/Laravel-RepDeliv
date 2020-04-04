<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MReader;
    
    //=======================================================================
    class MReadersController extends Controller
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
				// -- QueryBuilder: SELECT [m_readers]--
				// ----------------------------------------------------
				$m_reader = DB::table("m_readers")
				->leftJoin("m_reader_roles","m_reader_roles.id", "=", "m_readers.id_m_reader_roles")
				->leftJoin("m_members","m_members.id", "=", "m_readers.id_m_members")
				->orWhere("m_readers.name", "LIKE", "%$keyword%")->orWhere("m_readers.email", "LIKE", "%$keyword%")->orWhere("m_readers.id_m_reader_roles", "LIKE", "%$keyword%")->orWhere("m_readers.id_m_members", "LIKE", "%$keyword%")->orWhere("m_reader_roles.name", "LIKE", "%$keyword%")->orWhere("m_members.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_readers.id")->paginate($perPage);
            } else {
                    //$m_reader = MReader::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_readers]--
				// ----------------------------------------------------
				$m_reader = DB::table("m_readers")
				->leftJoin("m_reader_roles","m_reader_roles.id", "=", "m_readers.id_m_reader_roles")
				->leftJoin("m_members","m_members.id", "=", "m_readers.id_m_members")
				->select("*")->addSelect("m_readers.id")->paginate($perPage);              
            }          
            return view("m_reader.index", compact("m_reader"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_reader.create");
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
				"start_date" => "nullable|date", //date('start_date')->nullable()
				"id_m_reader_roles" => "nullable|integer", //integer('id_m_reader_roles')->nullable()
				"id_m_members" => "nullable|integer", //integer('id_m_members')->nullable()

            ]);
            $requestData = $request->all();
            
            MReader::create($requestData);
    
            return redirect("m_reader")->with("flash_message", "m_reader added!");
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
            //$m_reader = MReader::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_readers]--
				// ----------------------------------------------------
				$m_reader = DB::table("m_readers")
				->leftJoin("m_reader_roles","m_reader_roles.id", "=", "m_readers.id_m_reader_roles")
				->leftJoin("m_members","m_members.id", "=", "m_readers.id_m_members")
				->select("*")->addSelect("m_readers.id")->where("m_readers.id",$id)->first();
            return view("m_reader.show", compact("m_reader"));
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
            $m_reader = MReader::findOrFail($id);
    
            return view("m_reader.edit", compact("m_reader"));
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
				"start_date" => "nullable|date", //date('start_date')->nullable()
				"id_m_reader_roles" => "nullable|integer", //integer('id_m_reader_roles')->nullable()
				"id_m_members" => "nullable|integer", //integer('id_m_members')->nullable()

            ]);
            $requestData = $request->all();
            
            $m_reader = MReader::findOrFail($id);
            $m_reader->update($requestData);
    
            return redirect("m_reader")->with("flash_message", "m_reader updated!");
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
            MReader::destroy($id);
    
            return redirect("m_reader")->with("flash_message", "m_reader deleted!");
        }
    }
    //=======================================================================
    
    