
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit t_report #{{ $t_report->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("t_report") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/t_report/{{ $t_report->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$t_report->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="title" class="col-md-4 control-label">title: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="title" type="text" id="title" value="{{$t_report->title}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="content" class="col-md-4 control-label">content: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="content" type="text" id="content" value="{{$t_report->content}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_readers" class="col-md-4 control-label">id_m_readers: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_readers" type="text" id="id_m_readers" value="{{$t_report->id_m_readers}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_writers" class="col-md-4 control-label">id_m_writers: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_writers" type="text" id="id_m_writers" value="{{$t_report->id_m_writers}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_status_types" class="col-md-4 control-label">id_m_status_types: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_status_types" type="text" id="id_m_status_types" value="{{$t_report->id_m_status_types}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_t_attachments" class="col-md-4 control-label">id_t_attachments: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_t_attachments" type="text" id="id_t_attachments" value="{{$t_report->id_t_attachments}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_t_comments" class="col-md-4 control-label">id_t_comments: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_t_comments" type="text" id="id_t_comments" value="{{$t_report->id_t_comments}}">
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
    