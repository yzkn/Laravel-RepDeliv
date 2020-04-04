<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMReaderRolesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_reader_roles", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();



						// ----------------------------------------------------
						// -- SELECT [m_reader_roles]--
						// ----------------------------------------------------
						// $query = DB::table("m_reader_roles")
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
                    Schema::dropIfExists("m_reader_roles");
                }
            }
        