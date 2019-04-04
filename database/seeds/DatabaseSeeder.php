<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(languageTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(ToolTableSeeder::class);
        $this->call(UrlsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserHasRolesSeeder::class);
        $this->call(ToolLanguageSeeder::class);
    }
}
