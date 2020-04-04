<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\TAttachment;
    
    //=======================================================================
    class TAttachmentsController extends Controller
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
				// -- QueryBuilder: SELECT [t_attachments]--
				// ----------------------------------------------------
				$t_attachment = DB::table("t_attachments")
				->leftJoin("m_filetypes","m_filetypes.id", "=", "t_attachments.id_m_filetypes")
				->orWhere("t_attachments.filename", "LIKE", "%$keyword%")->orWhere("t_attachments.filepath", "LIKE", "%$keyword%")->orWhere("t_attachments.filesize", "LIKE", "%$keyword%")->orWhere("t_attachments.id_m_filetypes", "LIKE", "%$keyword%")->orWhere("m_filetypes.name", "LIKE", "%$keyword%")->orWhere("m_filetypes.extension", "LIKE", "%$keyword%")->select("*")->addSelect("t_attachments.id")->paginate($perPage);
            } else {
                    //$t_attachment = TAttachment::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [t_attachments]--
				// ----------------------------------------------------
				$t_attachment = DB::table("t_attachments")
				->leftJoin("m_filetypes","m_filetypes.id", "=", "t_attachments.id_m_filetypes")
				->select("*")->addSelect("t_attachments.id")->paginate($perPage);              
            }          
            return view("t_attachment.index", compact("t_attachment"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("t_attachment.create");
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
				"filename" => "nullable", //text('filename')->nullable()
				"filepath" => "nullable", //text('filepath')->nullable()
				"filesize" => "nullable|integer", //bigInteger('filesize')->nullable()
				"id_m_filetypes" => "nullable|integer", //integer('id_m_filetypes')->nullable()

            ]);
            $requestData = $request->all();
            
            TAttachment::create($requestData);
    
            return redirect("t_attachment")->with("flash_message", "t_attachment added!");
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
            //$t_attachment = TAttachment::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [t_attachments]--
				// ----------------------------------------------------
				$t_attachment = DB::table("t_attachments")
				->leftJoin("m_filetypes","m_filetypes.id", "=", "t_attachments.id_m_filetypes")
				->select("*")->addSelect("t_attachments.id")->where("t_attachments.id",$id)->first();
            return view("t_attachment.show", compact("t_attachment"));
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
            $t_attachment = TAttachment::findOrFail($id);
    
            return view("t_attachment.edit", compact("t_attachment"));
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
				"filename" => "nullable", //text('filename')->nullable()
				"filepath" => "nullable", //text('filepath')->nullable()
				"filesize" => "nullable|integer", //bigInteger('filesize')->nullable()
				"id_m_filetypes" => "nullable|integer", //integer('id_m_filetypes')->nullable()

            ]);
            $requestData = $request->all();
            
            $t_attachment = TAttachment::findOrFail($id);
            $t_attachment->update($requestData);
    
            return redirect("t_attachment")->with("flash_message", "t_attachment updated!");
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
            TAttachment::destroy($id);
    
            return redirect("t_attachment")->with("flash_message", "t_attachment deleted!");
        }
    }
    //=======================================================================
    
    