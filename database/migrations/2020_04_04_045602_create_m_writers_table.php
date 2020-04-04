<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMWritersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_writers", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();
						$table->text('email')->nullable();
						$table->integer('id_m_writer_roles')->nullable()->unsigned();
						$table->foreign("id_m_writer_roles")->references("id")->on("m_writer_roles");



						// ----------------------------------------------------
						// -- SELECT [m_writers]--
						// ----------------------------------------------------
						// $query = DB::table("m_writers")
						// ->leftJoin("m_writer_roles","m_writer_roles.id", "=", "m_writers.id_m_writer_roles")
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
                    Schema::dropIfExists("m_writers");
                }
            }
        