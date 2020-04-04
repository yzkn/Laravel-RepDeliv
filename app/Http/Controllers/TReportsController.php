<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\TReport;
    
    //=======================================================================
    class TReportsController extends Controller
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
				// -- QueryBuilder: SELECT [t_reports]--
				// ----------------------------------------------------
				$t_report = DB::table("t_reports")
				->leftJoin("m_readers","m_readers.id", "=", "t_reports.id_m_readers")
				->leftJoin("m_writers","m_writers.id", "=", "t_reports.id_m_writers")
				->leftJoin("m_status_types","m_status_types.id", "=", "t_reports.id_m_status_types")
				->leftJoin("t_attachments","t_attachments.id", "=", "t_reports.id_t_attachments")
				->leftJoin("t_comments","t_comments.id", "=", "t_reports.id_t_comments")
				->orWhere("t_reports.title", "LIKE", "%$keyword%")->orWhere("t_reports.content", "LIKE", "%$keyword%")->orWhere("t_reports.id_m_readers", "LIKE", "%$keyword%")->orWhere("t_reports.id_m_writers", "LIKE", "%$keyword%")->orWhere("t_reports.id_m_status_types", "LIKE", "%$keyword%")->orWhere("t_reports.id_t_attachments", "LIKE", "%$keyword%")->orWhere("t_reports.id_t_comments", "LIKE", "%$keyword%")->orWhere("m_readers.name", "LIKE", "%$keyword%")->orWhere("m_readers.email", "LIKE", "%$keyword%")->orWhere("m_readers.id_m_reader_roles", "LIKE", "%$keyword%")->orWhere("m_readers.id_m_members", "LIKE", "%$keyword%")->orWhere("m_writers.name", "LIKE", "%$keyword%")->orWhere("m_writers.email", "LIKE", "%$keyword%")->orWhere("m_writers.id_m_writer_roles", "LIKE", "%$keyword%")->orWhere("m_status_types.name", "LIKE", "%$keyword%")->orWhere("t_attachments.filename", "LIKE", "%$keyword%")->orWhere("t_attachments.filepath", "LIKE", "%$keyword%")->orWhere("t_attachments.filesize", "LIKE", "%$keyword%")->orWhere("t_attachments.id_m_filetypes", "LIKE", "%$keyword%")->orWhere("t_comments.message", "LIKE", "%$keyword%")->orWhere("t_comments.id_m_status_types", "LIKE", "%$keyword%")->select("*")->addSelect("t_reports.id")->paginate($perPage);
            } else {
                    //$t_report = TReport::paginate($perPage);
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [t_reports]--
				// ----------------------------------------------------
				$t_report = DB::table("t_reports")
				->leftJoin("m_readers","m_readers.id", "=", "t_reports.id_m_readers")
				->leftJoin("m_writers","m_writers.id", "=", "t_reports.id_m_writers")
				->leftJoin("m_status_types","m_status_types.id", "=", "t_reports.id_m_status_types")
				->leftJoin("t_attachments","t_attachments.id", "=", "t_reports.id_t_attachments")
				->leftJoin("t_comments","t_comments.id", "=", "t_reports.id_t_comments")
				->select("*")->addSelect("t_reports.id")->paginate($perPage);              
            }          
            return view("t_report.index", compact("t_report"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("t_report.create");
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
				"title" => "nullable", //text('title')->nullable()
				"content" => "nullable", //multiLineString('content')->nullable()
				"id_m_readers" => "nullable|integer", //integer('id_m_readers')->nullable()
				"id_m_writers" => "nullable|integer", //integer('id_m_writers')->nullable()
				"id_m_status_types" => "nullable|integer", //integer('id_m_status_types')->nullable()
				"id_t_attachments" => "nullable|integer", //integer('id_t_attachments')->nullable()
				"id_t_comments" => "nullable|integer", //integer('id_t_comments')->nullable()

            ]);
            $requestData = $request->all();
            
            TReport::create($requestData);
    
            return redirect("t_report")->with("flash_message", "t_report added!");
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
            //$t_report = TReport::findOrFail($id);
            
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [t_reports]--
				// ----------------------------------------------------
				$t_report = DB::table("t_reports")
				->leftJoin("m_readers","m_readers.id", "=", "t_reports.id_m_readers")
				->leftJoin("m_writers","m_writers.id", "=", "t_reports.id_m_writers")
				->leftJoin("m_status_types","m_status_types.id", "=", "t_reports.id_m_status_types")
				->leftJoin("t_attachments","t_attachments.id", "=", "t_reports.id_t_attachments")
				->leftJoin("t_comments","t_comments.id", "=", "t_reports.id_t_comments")
				->select("*")->addSelect("t_reports.id")->where("t_reports.id",$id)->first();
            return view("t_report.show", compact("t_report"));
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
            $t_report = TReport::findOrFail($id);
    
            return view("t_report.edit", compact("t_report"));
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
				"title" => "nullable", //text('title')->nullable()
				"content" => "nullable", //multiLineString('content')->nullable()
				"id_m_readers" => "nullable|integer", //integer('id_m_readers')->nullable()
				"id_m_writers" => "nullable|integer", //integer('id_m_writers')->nullable()
				"id_m_status_types" => "nullable|integer", //integer('id_m_status_types')->nullable()
				"id_t_attachments" => "nullable|integer", //integer('id_t_attachments')->nullable()
				"id_t_comments" => "nullable|integer", //integer('id_t_comments')->nullable()

            ]);
            $requestData = $request->all();
            
            $t_report = TReport::findOrFail($id);
            $t_report->update($requestData);
    
            return redirect("t_report")->with("flash_message", "t_report updated!");
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
            TReport::destroy($id);
    
            return redirect("t_report")->with("flash_message", "t_report deleted!");
        }
    }
    //=======================================================================
    
    