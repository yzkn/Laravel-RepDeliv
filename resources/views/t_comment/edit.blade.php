
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit t_comment #{{ $t_comment->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("t_comment") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/t_comment/{{ $t_comment->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$t_comment->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="message" class="col-md-4 control-label">message: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="message" type="text" id="message" value="{{$t_comment->message}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_status_types" class="col-md-4 control-label">id_m_status_types: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_status_types" type="text" id="id_m_status_types" value="{{$t_comment->id_m_status_types}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    