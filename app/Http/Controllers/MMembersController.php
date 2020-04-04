<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MMember;
    
    //=======================================================================
    class MMembersController extends Controller
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
				// -- QueryBuilder: SELECT [m_members]--
				// ----------------------------------------------------
				$m_member = DB::table("m_members")
				->orWhere("m_members.name", "LIKE", "%$keyword%")->select("*")->addSelect("m_members.id")->paginate($perPage);
            } else {
                    //$m_member = MMember::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_members]--
				// ----------------------------------------------------
				$m_member = DB::table("m_members")
				->select("*")->addSelect("m_members.id")->paginate($perPage);              
            }          
            return view("m_member.index", compact("m_member"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("m_member.create");
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
				"start_date" => "nullable|date", //date('start_date')->nullable()

            ]);
            $requestData = $request->all();
            
            MMember::create($requestData);
    
            return redirect("m_member")->with("flash_message", "m_member added!");
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
            //$m_member = MMember::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [m_members]--
				// ----------------------------------------------------
				$m_member = DB::table("m_members")
				->select("*")->addSelect("m_members.id")->where("m_members.id",$id)->first();
            return view("m_member.show", compact("m_member"));
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
            $m_member = MMember::findOrFail($id);
    
            return view("m_member.edit", compact("m_member"));
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
				"start_date" => "nullable|date", //date('start_date')->nullable()

            ]);
            $requestData = $request->all();
            
            $m_member = MMember::findOrFail($id);
            $m_member->update($requestData);
    
            return redirect("m_member")->with("flash_message", "m_member updated!");
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
            MMember::destroy($id);
    
            return redirect("m_member")->with("flash_message", "m_member deleted!");
        }
    }
    //=======================================================================
    
    