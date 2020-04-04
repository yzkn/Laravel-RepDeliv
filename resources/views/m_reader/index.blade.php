
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">m_reader</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("m_reader/create") }}" class="btn btn-success btn-sm" title="Add New m_reader">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("m_reader") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>name</th><th>email</th><th>start_date</th><th>id_m_reader_roles</th><th>id_m_members</th><th>name</th><th>name</th><th>start_date</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($m_reader as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->name}} </td>

                                            <td>{{ $item->email}} </td>

                                            <td>{{ $item->start_date}} </td>

                                            <td>{{ $item->id_m_reader_roles}} </td>

                                            <td>{{ $item->id_m_members}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->name}} </td>

                                                    <td>{{ $item->start_date}} </td>
  
                                                <td><a href="{{ url("/m_reader/" . $item->id) }}" title="View m_reader"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/m_reader/" . $item->id . "/edit") }}" title="Edit m_reader"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/m_reader/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $m_reader->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    