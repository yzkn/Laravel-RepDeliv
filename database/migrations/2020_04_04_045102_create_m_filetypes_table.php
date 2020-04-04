<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMFiletypesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("m_filetypes", function (Blueprint $table) {
						$table->increments('id');
						$table->text('name')->nullable();
						$table->text('extension')->nullable();



						// ----------------------------------------------------
						// -- SELECT [m_filetypes]--
						// ----------------------------------------------------
						// $query = DB::table("m_filetypes")
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
                    Schema::dropIfExists("m_filetypes");
                }
            }
        