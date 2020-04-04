<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateTAttachmentsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("t_attachments", function (Blueprint $table) {
						$table->increments('id');
						$table->text('filename')->nullable();
						$table->text('filepath')->nullable();
						$table->bigInteger('filesize')->nullable();
						$table->integer('id_m_filetypes')->nullable()->unsigned();
						$table->timestamps();
						$table->foreign("id_m_filetypes")->references("id")->on("m_filetypes");



						// ----------------------------------------------------
						// -- SELECT [t_attachments]--
						// ----------------------------------------------------
						// $query = DB::table("t_attachments")
						// ->leftJoin("m_filetypes","m_filetypes.id", "=", "t_attachments.id_m_filetypes")
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
                    Schema::dropIfExists("t_attachments");
                }
            }
        