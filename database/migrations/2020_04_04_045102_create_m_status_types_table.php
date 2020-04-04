<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMStatusTypesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_status_types", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();



						// ----------------------------------------------------
						// -- SELECT [m_status_types]--
						// ----------------------------------------------------
						// $query = DB::table("m_status_types")
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
                    Schema::dropIfExists("m_status_types");
                }
            }
        