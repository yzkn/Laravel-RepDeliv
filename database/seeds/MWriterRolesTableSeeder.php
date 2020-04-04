<?php
use Illuminate\Database\Seeder;

    class MWriterRolesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="MWriterRolesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MWriterRole::create([
					"name" => $faker->name()
                ]);
            }
        }
    }