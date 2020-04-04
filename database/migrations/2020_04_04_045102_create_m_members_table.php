<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMMembersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_members", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();
						$table->date('start_date')->nullable();



						// ----------------------------------------------------
						// -- SELECT [m_members]--
						// ----------------------------------------------------
						// $query = DB::table("m_members")
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
                    Schema::dropIfExists("m_members");
                }
            }
        