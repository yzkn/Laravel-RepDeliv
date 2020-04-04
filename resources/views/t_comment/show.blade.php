
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">t_comment {{ $t_comment->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("t_comment") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("t_comment") ."/". $t_comment->id . "/edit" }}" title="Edit t_comment"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/t_comment/{{ $t_comment->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$t_comment->id}} </td></tr>
										<tr><th>message</th><td>{{$t_comment->message}} </td></tr>
										<tr><th>id_m_status_types</th><td>{{$t_comment->id_m_status_types}} </td></tr>
										<tr><th>name</th><td>{{$t_comment->name}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    