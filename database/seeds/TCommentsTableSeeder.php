<?php
use Illuminate\Database\Seeder;

    class TCommentsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="TCommentsTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<10; $i++ ){

                App\TComment::create([
					"message" => $faker->word(),
					"id_m_status_types" => 1 + $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }