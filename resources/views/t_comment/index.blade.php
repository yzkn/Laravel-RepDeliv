
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">t_comment</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("t_comment/create") }}" class="btn btn-success btn-sm" title="Add New t_comment">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("t_comment") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>message</th><th>id_m_status_types</th><th>name</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($t_comment as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->message}} </td>

                                            <td>{{ $item->id_m_status_types}} </td>

                                                    <td>{{ $item->name}} </td>
  
                                                <td><a href="{{ url("/t_comment/" . $item->id) }}" title="View t_comment"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/t_comment/" . $item->id . "/edit") }}" title="Edit t_comment"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/t_comment/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $t_comment->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    