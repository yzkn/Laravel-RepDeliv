<?php
use Illuminate\Database\Seeder;

class MWritersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cmd: php artisan db:seed --class="MWritersTableSeeder"

        $faker = Faker\Factory::create("ja_JP");

        for ($i=0; $i<10; $i++) {
            App\MWriter::create([
                    "name" => $faker->name(),
                    "email" => $faker->safeEmail(),
                    "id_m_writer_roles" => 1 + $faker->randomDigit()
                ]);
        }
    }
}
