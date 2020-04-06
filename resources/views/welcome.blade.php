@extends("layouts.app")
@section("content")
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/tables_check_view_html') }}">Tables</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    @endif
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="offset-md-2">
                    <div class="title m-b-md">
                        RepDeliv
                    </div>
                    <div class="links">
                        <div class="menu">
                            <div class="m-b-md">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="/tables_check_view_html">Tables</a></li>
                                    <li class="list-group-item"><a href="/m_member">MMembers</a></li>
                                    <li class="list-group-item"><a href="/t_report">TReports</a></li>
                                    <li class="list-group-item"><a href="/m_reader_role">MReaderRoles</a></li>
                                    <li class="list-group-item"><a href="/m_status_type">MStatusTypes</a></li>
                                    <li class="list-group-item"><a href="/t_comment">TComments</a></li>
                                    <li class="list-group-item"><a href="/m_reader">MReaders</a></li>
                                    <li class="list-group-item"><a href="/m_writer">MWriters</a></li>
                                    <li class="list-group-item"><a href="/m_writer_role">MWriterRoles</a></li>
                                    <li class="list-group-item"><a href="/t_attachment">TAttachments</a></li>
                                    <li class="list-group-item"><a href="/m_filetype">MFiletypes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection