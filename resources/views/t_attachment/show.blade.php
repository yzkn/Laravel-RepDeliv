
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">t_attachment {{ $t_attachment->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("t_attachment") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("t_attachment") ."/". $t_attachment->id . "/edit" }}" title="Edit t_attachment"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/t_attachment/{{ $t_attachment->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$t_attachment->id}} </td></tr>
										<tr><th>filename</th><td>{{$t_attachment->filename}} </td></tr>
										<tr><th>filepath</th><td>{{$t_attachment->filepath}} </td></tr>
										<tr><th>filesize</th><td>{{$t_attachment->filesize}} </td></tr>
										<tr><th>id_m_filetypes</th><td>{{$t_attachment->id_m_filetypes}} </td></tr>
										<tr><th>name</th><td>{{$t_attachment->name}} </td></tr>
										<tr><th>extension</th><td>{{$t_attachment->extension}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    