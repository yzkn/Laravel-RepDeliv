<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateTCommentsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("t_comments", function (Blueprint $table) {
						$table->increments('id');
						$table->text('message')->nullable();
						$table->integer('id_m_status_types')->nullable()->unsigned();
						$table->timestamps();
						$table->foreign("id_m_status_types")->references("id")->on("m_status_types");



						// ----------------------------------------------------
						// -- SELECT [t_comments]--
						// ----------------------------------------------------
						// $query = DB::table("t_comments")
						// ->leftJoin("m_status_types","m_status_types.id", "=", "t_comments.id_m_status_types")
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
                    Schema::dropIfExists("t_comments");
                }
            }
        