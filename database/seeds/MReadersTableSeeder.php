<?php
use Illuminate\Database\Seeder;

class MReadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cmd: php artisan db:seed --class="MReadersTableSeeder"

        $faker = Faker\Factory::create("ja_JP");

        for ($i=0; $i<10; $i++) {
            App\MReader::create([
                    "name" => $faker->name(),
                    "email" => $faker->safeEmail(),
                    "start_date" => $faker->date()." ".$faker->time(),
                    "id_m_reader_roles" => 1 + $faker->randomDigit(),
                    "id_m_members" => 1 + $faker->randomDigit()
                ]);
        }
    }
}
