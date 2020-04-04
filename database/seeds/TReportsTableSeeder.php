<?php
use Illuminate\Database\Seeder;

    class TReportsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="TReportsTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<10; $i++ ){

                App\TReport::create([
					"title" => $faker->word(),
					"content" => $faker->word(),
					"id_m_readers" => 1 + $faker->randomDigit(),
					"id_m_writers" => 1 + $faker->randomDigit(),
					"id_m_status_types" => 1 + $faker->randomDigit(),
					"id_t_attachments" => 1 + $faker->randomDigit(),
					"id_t_comments" => 1 + $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }