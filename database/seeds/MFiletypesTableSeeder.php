<?php
use Illuminate\Database\Seeder;

    class MFiletypesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="MFiletypesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MFiletype::create([
					"name" => $faker->name(),
					"extension" => $faker->word()
                ]);
            }
        }
    }