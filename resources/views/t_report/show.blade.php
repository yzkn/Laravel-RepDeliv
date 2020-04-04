
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">t_report {{ $t_report->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("t_report") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("t_report") ."/". $t_report->id . "/edit" }}" title="Edit t_report"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/t_report/{{ $t_report->id }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$t_report->id}} </td></tr>
										<tr><th>title</th><td>{{$t_report->title}} </td></tr>
										<tr><th>content</th><td>{{$t_report->content}} </td></tr>
										<tr><th>id_m_readers</th><td>{{$t_report->id_m_readers}} </td></tr>
										<tr><th>id_m_writers</th><td>{{$t_report->id_m_writers}} </td></tr>
										<tr><th>id_m_status_types</th><td>{{$t_report->id_m_status_types}} </td></tr>
										<tr><th>id_t_attachments</th><td>{{$t_report->id_t_attachments}} </td></tr>
										<tr><th>id_t_comments</th><td>{{$t_report->id_t_comments}} </td></tr>
										<tr><th>name</th><td>{{$t_report->name}} </td></tr>
										<tr><th>email</th><td>{{$t_report->email}} </td></tr>
										<tr><th>start_date</th><td>{{$t_report->start_date}} </td></tr>
										<tr><th>id_m_reader_roles</th><td>{{$t_report->id_m_reader_roles}} </td></tr>
										<tr><th>id_m_members</th><td>{{$t_report->id_m_members}} </td></tr>
										<tr><th>name</th><td>{{$t_report->name}} </td></tr>
										<tr><th>email</th><td>{{$t_report->email}} </td></tr>
										<tr><th>id_m_writer_roles</th><td>{{$t_report->id_m_writer_roles}} </td></tr>
										<tr><th>name</th><td>{{$t_report->name}} </td></tr>
										<tr><th>filename</th><td>{{$t_report->filename}} </td></tr>
										<tr><th>filepath</th><td>{{$t_report->filepath}} </td></tr>
										<tr><th>filesize</th><td>{{$t_report->filesize}} </td></tr>
										<tr><th>id_m_filetypes</th><td>{{$t_report->id_m_filetypes}} </td></tr>
										<tr><th>message</th><td>{{$t_report->message}} </td></tr>
										<tr><th>id_m_status_types</th><td>{{$t_report->id_m_status_types}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    