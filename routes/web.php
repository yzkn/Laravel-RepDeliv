<?php
use Illuminate\Http\Response;

//default
Route::get("/", function () {
    return view("welcome");
});
//Demo (Delete after site publish.)
Route::get("/tables_check_view_html",function(){
    return view("tables_check_view_html");
});

//=======================================================================
//index
Route::get("m_member/", "MMembersController@index");
//create
Route::get("m_member/create", "MMembersController@create");
//show
Route::get("m_member/{id}", "MMembersController@show");
//store
Route::post("m_member/store", "MMembersController@store");
//edit
Route::get("m_member/{id}/edit", "MMembersController@edit");
//update
Route::put("m_member/{id}", "MMembersController@update");
//destroy
Route::delete("m_member/{id}", "MMembersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("t_report/", "TReportsController@index");
//create
Route::get("t_report/create", "TReportsController@create");
//show
Route::get("t_report/{id}", "TReportsController@show");
//store
Route::post("t_report/store", "TReportsController@store");
//edit
Route::get("t_report/{id}/edit", "TReportsController@edit");
//update
Route::put("t_report/{id}", "TReportsController@update");
//destroy
Route::delete("t_report/{id}", "TReportsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_reader_role/", "MReaderRolesController@index");
//create
Route::get("m_reader_role/create", "MReaderRolesController@create");
//show
Route::get("m_reader_role/{id}", "MReaderRolesController@show");
//store
Route::post("m_reader_role/store", "MReaderRolesController@store");
//edit
Route::get("m_reader_role/{id}/edit", "MReaderRolesController@edit");
//update
Route::put("m_reader_role/{id}", "MReaderRolesController@update");
//destroy
Route::delete("m_reader_role/{id}", "MReaderRolesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_status_type/", "MStatusTypesController@index");
//create
Route::get("m_status_type/create", "MStatusTypesController@create");
//show
Route::get("m_status_type/{id}", "MStatusTypesController@show");
//store
Route::post("m_status_type/store", "MStatusTypesController@store");
//edit
Route::get("m_status_type/{id}/edit", "MStatusTypesController@edit");
//update
Route::put("m_status_type/{id}", "MStatusTypesController@update");
//destroy
Route::delete("m_status_type/{id}", "MStatusTypesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("t_comment/", "TCommentsController@index");
//create
Route::get("t_comment/create", "TCommentsController@create");
//show
Route::get("t_comment/{id}", "TCommentsController@show");
//store
Route::post("t_comment/store", "TCommentsController@store");
//edit
Route::get("t_comment/{id}/edit", "TCommentsController@edit");
//update
Route::put("t_comment/{id}", "TCommentsController@update");
//destroy
Route::delete("t_comment/{id}", "TCommentsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_reader/", "MReadersController@index");
//create
Route::get("m_reader/create", "MReadersController@create");
//show
Route::get("m_reader/{id}", "MReadersController@show");
//store
Route::post("m_reader/store", "MReadersController@store");
//edit
Route::get("m_reader/{id}/edit", "MReadersController@edit");
//update
Route::put("m_reader/{id}", "MReadersController@update");
//destroy
Route::delete("m_reader/{id}", "MReadersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_writer/", "MWritersController@index");
//create
Route::get("m_writer/create", "MWritersController@create");
//show
Route::get("m_writer/{id}", "MWritersController@show");
//store
Route::post("m_writer/store", "MWritersController@store");
//edit
Route::get("m_writer/{id}/edit", "MWritersController@edit");
//update
Route::put("m_writer/{id}", "MWritersController@update");
//destroy
Route::delete("m_writer/{id}", "MWritersController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_writer_role/", "MWriterRolesController@index");
//create
Route::get("m_writer_role/create", "MWriterRolesController@create");
//show
Route::get("m_writer_role/{id}", "MWriterRolesController@show");
//store
Route::post("m_writer_role/store", "MWriterRolesController@store");
//edit
Route::get("m_writer_role/{id}/edit", "MWriterRolesController@edit");
//update
Route::put("m_writer_role/{id}", "MWriterRolesController@update");
//destroy
Route::delete("m_writer_role/{id}", "MWriterRolesController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("t_attachment/", "TAttachmentsController@index");
//create
Route::get("t_attachment/create", "TAttachmentsController@create");
//show
Route::get("t_attachment/{id}", "TAttachmentsController@show");
//store
Route::post("t_attachment/store", "TAttachmentsController@store");
//edit
Route::get("t_attachment/{id}/edit", "TAttachmentsController@edit");
//update
Route::put("t_attachment/{id}", "TAttachmentsController@update");
//destroy
Route::delete("t_attachment/{id}", "TAttachmentsController@destroy");
//=======================================================================

//=======================================================================
//index
Route::get("m_filetype/", "MFiletypesController@index");
//create
Route::get("m_filetype/create", "MFiletypesController@create");
//show
Route::get("m_filetype/{id}", "MFiletypesController@show");
//store
Route::post("m_filetype/store", "MFiletypesController@store");
//edit
Route::get("m_filetype/{id}/edit", "MFiletypesController@edit");
//update
Route::put("m_filetype/{id}", "MFiletypesController@update");
//destroy
Route::delete("m_filetype/{id}", "MFiletypesController@destroy");
//=======================================================================

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
