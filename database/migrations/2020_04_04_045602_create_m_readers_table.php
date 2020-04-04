<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMReadersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_readers", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();
						$table->text('email')->nullable();
						$table->date('start_date')->nullable();
						$table->integer('id_m_reader_roles')->nullable()->unsigned();
						$table->integer('id_m_members')->nullable()->unsigned();
						$table->foreign("id_m_reader_roles")->references("id")->on("m_reader_roles");
						$table->foreign("id_m_members")->references("id")->on("m_members");



						// ----------------------------------------------------
						// -- SELECT [m_readers]--
						// ----------------------------------------------------
						// $query = DB::table("m_readers")
						// ->leftJoin("m_reader_roles","m_reader_roles.id", "=", "m_readers.id_m_reader_roles")
						// ->leftJoin("m_members","m_members.id", "=", "m_readers.id_m_members")
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
                    Schema::dropIfExists("m_readers");
                }
            }
        