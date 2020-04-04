<?php
use Illuminate\Database\Seeder;

    class TAttachmentsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="TAttachmentsTableSeeder"

            $faker = Faker\Factory::create("ja_JP");

            for( $i=0; $i<10; $i++ ){

                App\TAttachment::create([
					"filename" => $faker->name(),
					"filepath" => $faker->word(),
					"filesize" => 1 + $faker->randomDigit(),
					"id_m_filetypes" => 1 + $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }