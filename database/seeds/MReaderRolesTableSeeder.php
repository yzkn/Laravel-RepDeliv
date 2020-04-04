<?php
use Illuminate\Database\Seeder;

    class MReaderRolesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="MReaderRolesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MReaderRole::create([
					"name" => $faker->name()
                ]);
            }
        }
    }