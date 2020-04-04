
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tables</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
<h1>Tables</h1>
    <div class="container-fluid">
        <div class="row">
            
                


                <!-- table[Start] --><div class="col-md-3"><h2 class="info">m_members</h2><h5>[会員企業 ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><tr><td>3</td><td>date('start_date')->nullable();</td><td>適用開始日</td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">t_reports</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('title')->nullable();
</td><td></td></tr><tr><td>3</td><td>multiLineString('content')->nullable();
</td><td></td></tr><tr><td>4</td><td>integer('id_m_readers')->nullable()->unsigned();
</td><td></td></tr><tr><td>5</td><td>integer('id_m_writers')->nullable()->unsigned();
</td><td></td></tr><tr><td>6</td><td>integer('id_m_status_types')->nullable()->unsigned();
</td><td></td></tr><tr><td>7</td><td>integer('id_t_attachments')->nullable()->unsigned();
</td><td></td></tr><tr><td>8</td><td>integer('id_t_comments')->nullable()->unsigned();
</td><td></td></tr><tr><td>9</td><td>timestamps();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_readers")<span class="text-danger">->references("id")->on("m_readers");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_writers")<span class="text-danger">->references("id")->on("m_writers");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_status_types")<span class="text-danger">->references("id")->on("m_status_types");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_t_attachments")<span class="text-danger">->references("id")->on("t_attachments");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_t_comments")<span class="text-danger">->references("id")->on("t_comments");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_reader_roles</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_status_types</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">t_comments</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('message')->nullable();
</td><td></td></tr><tr><td>3</td><td>integer('id_m_status_types')->nullable()->unsigned();
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_status_types")<span class="text-danger">->references("id")->on("m_status_types");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_readers</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><tr><td>3</td><td>text('email')->nullable();
</td><td></td></tr><tr><td>4</td><td>date('start_date')->nullable();
</td><td></td></tr><tr><td>5</td><td>integer('id_m_reader_roles')->nullable()->unsigned();
</td><td></td></tr><tr><td>6</td><td>integer('id_m_members')->nullable()->unsigned();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_reader_roles")<span class="text-danger">->references("id")->on("m_reader_roles");</span>
</td></tr></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_members")<span class="text-danger">->references("id")->on("m_members");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_writers</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><tr><td>3</td><td>text('email')->nullable();
</td><td></td></tr><tr><td>4</td><td>integer('id_m_writer_roles')->nullable()->unsigned();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_writer_roles")<span class="text-danger">->references("id")->on("m_writer_roles");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_writer_roles</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">t_attachments</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('filename')->nullable();
</td><td></td></tr><tr><td>3</td><td>text('filepath')->nullable();
</td><td></td></tr><tr><td>4</td><td>bigInteger('filesize')->nullable();
</td><td></td></tr><tr><td>5</td><td>integer('id_m_filetypes')->nullable()->unsigned();
</td><td></td></tr><tr><td>6</td><td>timestamps();
</td><td></td></tr><tr><td class="bg-secondary text-white">FK</td><td colspan="2">$table->foreign("id_m_filetypes")<span class="text-danger">->references("id")->on("m_filetypes");</span>
</td></tr></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">m_filetypes</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('name')->nullable();
</td><td></td></tr><tr><td>3</td><td>text('extension')->nullable();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --> </main>
        </div>
    </div>
</body>

</html>
