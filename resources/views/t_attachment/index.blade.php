
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">t_attachment</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("t_attachment/create") }}" class="btn btn-success btn-sm" title="Add New t_attachment">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("t_attachment") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>filename</th><th>filepath</th><th>filesize</th><th>id_m_filetypes</th><th>name</th><th>extension</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($t_attachment as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->filename}} </td>

                                            <td>{{ $item->filepath}} </td>

                                            <td>{{ $item->filesize}} </td>

                                            <td>{{ $item->id_m_filetypes}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->extension}} </td>
  
                                                <td><a href="{{ url("/t_attachment/" . $item->id) }}" title="View t_attachment"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/t_attachment/" . $item->id . "/edit") }}" title="Edit t_attachment"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/t_attachment/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $t_attachment->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    