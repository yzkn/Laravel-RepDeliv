<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMWriterRolesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_writer_roles", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();



						// ----------------------------------------------------
						// -- SELECT [m_writer_roles]--
						// ----------------------------------------------------
						// $query = DB::table("m_writer_roles")
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
                    Schema::dropIfExists("m_writer_roles");
                }
            }
        