<?php
use Illuminate\Database\Seeder;

    class MMembersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="MMembersTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MMember::create([
					"name" => $faker->name(),
					"start_date" => $faker->date()." ".$faker->time()
                ]);
            }
        }
    }