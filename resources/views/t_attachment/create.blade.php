
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New t_attachment</div>
                            <div class="panel-body">
                                <a href="{{ url("/t_attachment") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/t_attachment/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="filename" class="col-md-4 control-label">filename: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="filename" type="text" id="filename" value="{{old('filename')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="filepath" class="col-md-4 control-label">filepath: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="filepath" type="text" id="filepath" value="{{old('filepath')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="filesize" class="col-md-4 control-label">filesize: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="filesize" type="text" id="filesize" value="{{old('filesize')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="id_m_filetypes" class="col-md-4 control-label">id_m_filetypes: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="id_m_filetypes" type="text" id="id_m_filetypes" value="{{old('id_m_filetypes')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    