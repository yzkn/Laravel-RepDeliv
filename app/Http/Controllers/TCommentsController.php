<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\TComment;
    
    //=======================================================================
    class TCommentsController extends Controller
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
				// -- QueryBuilder: SELECT [t_comments]--
				// ----------------------------------------------------
				$t_comment = DB::table("t_comments")
				->leftJoin("m_status_types","m_status_types.id", "=", "t_comments.id_m_status_types")
				->orWhere("t_comments.message", "LIKE", "%$keyword%")->orWhere("t_comments.id_m_status_types", "LIKE", "%$keyword%")->orWhere("m_status_types.name", "LIKE", "%$keyword%")->select("*")->addSelect("t_comments.id")->paginate($perPage);
            } else {
                    //$t_comment = TComment::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [t_comments]--
				// ----------------------------------------------------
				$t_comment = DB::table("t_comments")
				->leftJoin("m_status_types","m_status_types.id", "=", "t_comments.id_m_status_types")
				->select("*")->addSelect("t_comments.id")->paginate($perPage);              
            }          
            return view("t_comment.index", compact("t_comment"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("t_comment.create");
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
				"message" => "nullable", //text('message')->nullable()
				"id_m_status_types" => "nullable|integer", //integer('id_m_status_types')->nullable()

            ]);
            $requestData = $request->all();
            
            TComment::create($requestData);
    
            return redirect("t_comment")->with("flash_message", "t_comment added!");
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
            //$t_comment = TComment::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [t_comments]--
				// ----------------------------------------------------
				$t_comment = DB::table("t_comments")
				->leftJoin("m_status_types","m_status_types.id", "=", "t_comments.id_m_status_types")
				->select("*")->addSelect("t_comments.id")->where("t_comments.id",$id)->first();
            return view("t_comment.show", compact("t_comment"));
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
            $t_comment = TComment::findOrFail($id);
    
            return view("t_comment.edit", compact("t_comment"));
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
				"message" => "nullable", //text('message')->nullable()
				"id_m_status_types" => "nullable|integer", //integer('id_m_status_types')->nullable()

            ]);
            $requestData = $request->all();
            
            $t_comment = TComment::findOrFail($id);
            $t_comment->update($requestData);
    
            return redirect("t_comment")->with("flash_message", "t_comment updated!");
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
            TComment::destroy($id);
    
            return redirect("t_comment")->with("flash_message", "t_comment deleted!");
        }
    }
    //=======================================================================
    
    