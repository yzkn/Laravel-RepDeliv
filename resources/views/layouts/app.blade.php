<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RepDeliv</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <div class="text-left"><a class="navbar-brand" href="/">RepDeliv</a></div>
            </div>
            <div class="collapse navbar-collapse" id="navbarEexample">
                <ul class="nav navbar-nav">
                    {{--
                    @auth
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth --}}

                    <li><a href="{{ url('/tables_check_view_html') }}">Tables</a></li>
                    <li><a href="/m_member">MMembers</a></li>
                    <li><a href="/t_report">TReports</a></li>
                    <li><a href="/m_reader_role">MReaderRoles</a></li>
                    <li><a href="/m_status_type">MStatusTypes</a></li>
                    <li><a href="/t_comment">TComments</a></li>
                    <li><a href="/m_reader">MReaders</a></li>
                    <li><a href="/m_writer">MWriters</a></li>
                    <li><a href="/m_writer_role">MWriterRoles</a></li>
                    <li><a href="/t_attachment">TAttachments</a></li>
                    <li><a href="/m_filetype">MFiletypes</a></li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>