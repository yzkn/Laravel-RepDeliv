
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit t_attachment #{{ $t_attachment->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("t_attachment") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/t_attachment/{{ $t_attachment->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$t_attachment->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="filename" class="col-md-4 control-label">filename: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="filename" type="text" id="filename" value="{{$t_attachment->filename}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="filepath" class="col-md-4 control-label">filepath: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="filepath" type="text" id="filepath" value="{{$t_attachment->filepath}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="filesize" class="col-md-4 control-label">filesize: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="filesize" type="text" id="filesize" value="{{$t_attachment->filesize}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_filetypes" class="col-md-4 control-label">id_m_filetypes: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_filetypes" type="text" id="id_m_filetypes" value="{{$t_attachment->id_m_filetypes}}">
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
    