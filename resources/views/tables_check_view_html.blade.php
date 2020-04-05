@extends("layouts.app")
@section("content")
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <!-- table[Start] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_member">m_members</a></h2>
                <h5>[会員企業 ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>date('start_date')->nullable();</td>
                                <td>適用開始日</td>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/t_report">t_reports</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('title')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>multiLineString('content')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>integer('id_m_readers')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>integer('id_m_writers')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>integer('id_m_status_types')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>integer('id_t_attachments')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>integer('id_t_comments')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>timestamps();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_readers")<span
                                        class="text-danger">->references("id")->on("m_readers");</span>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_writers")<span
                                        class="text-danger">->references("id")->on("m_writers");</span>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_status_types")<span
                                        class="text-danger">->references("id")->on("m_status_types");</span>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_t_attachments")<span
                                        class="text-danger">->references("id")->on("t_attachments");</span>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_t_comments")<span
                                        class="text-danger">->references("id")->on("t_comments");</span>
                                </td>
                            </tr>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_reader_role">m_reader_roles</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_status_type">m_status_types</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/t_comment">t_comments</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('message')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>integer('id_m_status_types')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>timestamps();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_status_types")<span
                                        class="text-danger">->references("id")->on("m_status_types");</span>
                                </td>
                            </tr>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_reader">m_readers</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>text('email')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>date('start_date')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>integer('id_m_reader_roles')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>integer('id_m_members')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_reader_roles")<span
                                        class="text-danger">->references("id")->on("m_reader_roles");</span>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_members")<span
                                        class="text-danger">->references("id")->on("m_members");</span>
                                </td>
                            </tr>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_writer">m_writers</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>text('email')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>integer('id_m_writer_roles')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_writer_roles")<span
                                        class="text-danger">->references("id")->on("m_writer_roles");</span>
                                </td>
                            </tr>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_writer_role">m_writer_roles</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/t_attachment">t_attachments</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('filename')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>text('filepath')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>bigInteger('filesize')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>integer('id_m_filetypes')->nullable()->unsigned();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>timestamps();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">FK</td>
                                <td colspan="2">$table->foreign("id_m_filetypes")<span
                                        class="text-danger">->references("id")->on("m_filetypes");</span>
                                </td>
                            </tr>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            <div class="col-md-4">
                <h2 class="info"><a href="/m_filetype">m_filetypes</a></h2>
                <h5>[ ]</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- TR -->
                            <tr>
                                <td>1</td>
                                <td>increments('id');
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>text('name')->nullable();
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>text('extension')->nullable();
                                </td>
                                <td></td>
                            </tr><!-- TR -->
                        </tbody>

                    </table>
                </div>
            </div>
            <!-- table[end] -->
            </main>
        </div>
    </div>
</div>
@endsection