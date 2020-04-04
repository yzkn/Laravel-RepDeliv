<?php
use Illuminate\Database\Seeder;

    class MStatusTypesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="MStatusTypesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MStatusType::create([
					"name" => $faker->name()
                ]);
            }
        }
    }