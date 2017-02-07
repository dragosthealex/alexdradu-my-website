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
        $this->call(UsersTableSeeder::class);
        Log::info('Users table seeded.');
        $this->call(SettingsTableSeeder::class);
        Log::info('Settings table seeded.');
        $this->call(TagsTableSeeder::class);
        Log::info('Tags table seeded.');
        $this->call(ProjectsTableSeeder::class);
        Log::info('Projects table seeded');
    }
}
