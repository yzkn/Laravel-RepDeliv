<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateTReportsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("t_reports", function (Blueprint $table) {
						$table->increments('id');
						$table->text('title')->nullable();
						$table->multiLineString('content')->nullable();
						$table->integer('id_m_readers')->nullable()->unsigned();
						$table->integer('id_m_writers')->nullable()->unsigned();
						$table->integer('id_m_status_types')->nullable()->unsigned();
						$table->integer('id_t_attachments')->nullable()->unsigned();
						$table->integer('id_t_comments')->nullable()->unsigned();
						$table->timestamps();
						$table->foreign("id_m_readers")->references("id")->on("m_readers");
						$table->foreign("id_m_writers")->references("id")->on("m_writers");
						$table->foreign("id_m_status_types")->references("id")->on("m_status_types");
						$table->foreign("id_t_attachments")->references("id")->on("t_attachments");
						$table->foreign("id_t_comments")->references("id")->on("t_comments");



						// ----------------------------------------------------
						// -- SELECT [t_reports]--
						// ----------------------------------------------------
						// $query = DB::table("t_reports")
						// ->leftJoin("m_readers","m_readers.id", "=", "t_reports.id_m_readers")
						// ->leftJoin("m_writers","m_writers.id", "=", "t_reports.id_m_writers")
						// ->leftJoin("m_status_types","m_status_types.id", "=", "t_reports.id_m_status_types")
						// ->leftJoin("t_attachments","t_attachments.id", "=", "t_reports.id_t_attachments")
						// ->leftJoin("t_comments","t_comments.id", "=", "t_reports.id_t_comments")
						// ->get();
						// dd($query); //For checking



                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("t_reports");
                }
            }
        