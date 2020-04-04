
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">t_report</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("t_report/create") }}" class="btn btn-success btn-sm" title="Add New t_report">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("t_report") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>title</th><th>content</th><th>id_m_readers</th><th>id_m_writers</th><th>id_m_status_types</th><th>id_t_attachments</th><th>id_t_comments</th><th>name</th><th>email</th><th>start_date</th><th>id_m_reader_roles</th><th>id_m_members</th><th>name</th><th>email</th><th>id_m_writer_roles</th><th>name</th><th>filename</th><th>filepath</th><th>filesize</th><th>id_m_filetypes</th><th>message</th><th>id_m_status_types</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($t_report as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->title}} </td>

                                            <td>{{ $item->content}} </td>

                                            <td>{{ $item->id_m_readers}} </td>

                                            <td>{{ $item->id_m_writers}} </td>

                                            <td>{{ $item->id_m_status_types}} </td>

                                            <td>{{ $item->id_t_attachments}} </td>

                                            <td>{{ $item->id_t_comments}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->email}} </td>

                                                    <td>{{ $item->start_date}} </td>

                                                    <td>{{ $item->id_m_reader_roles}} </td>

                                                    <td>{{ $item->id_m_members}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->email}} </td>

                                                    <td>{{ $item->id_m_writer_roles}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->filename}} </td>

                                                    <td>{{ $item->filepath}} </td>

                                                    <td>{{ $item->filesize}} </td>

                                                    <td>{{ $item->id_m_filetypes}} </td>

                                                    <td>{{ $item->message}} </td>

                                                    <td>{{ $item->id_m_status_types}} </td>
  
                                                <td><a href="{{ url("/t_report/" . $item->id) }}" title="View t_report"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/t_report/" . $item->id . "/edit") }}" title="Edit t_report"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/t_report/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $t_report->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    