
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit m_writer #{{ $m_writer->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("m_writer") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/m_writer/{{ $m_writer->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$m_writer->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="name" class="col-md-4 control-label">name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="name" type="text" id="name" value="{{$m_writer->name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="email" class="col-md-4 control-label">email: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="email" type="text" id="email" value="{{$m_writer->email}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_writer_roles" class="col-md-4 control-label">id_m_writer_roles: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_writer_roles" type="text" id="id_m_writer_roles" value="{{$m_writer->id_m_writer_roles}}">
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
    