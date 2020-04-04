<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //********************************************
        // Cmd:[ php artisan db:seed ]
        //********************************************
        // $this->call(UsersTableSeeder::class);

        $this->call(MReaderRolesTableSeeder::class);
        $this->call(MMembersTableSeeder::class);
        $this->call(MReadersTableSeeder::class);

        $this->call(MWriterRolesTableSeeder::class);
        $this->call(MWritersTableSeeder::class);

        $this->call(MFiletypesTableSeeder::class);
        $this->call(TAttachmentsTableSeeder::class);

        $this->call(MStatusTypesTableSeeder::class);
        $this->call(TCommentsTableSeeder::class);

        $this->call(TReportsTableSeeder::class);
    }
}
