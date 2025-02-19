<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Apk4AdvertTableSeeder::class);
        $this->call(Apk4AdvertpicTableSeeder::class);
        $this->call(Apk4AppTableSeeder::class);
        $this->call(Apk4AppImgTableSeeder::class);
        $this->call(Apk4AppListTableSeeder::class);
        $this->call(Apk4AppPackTableSeeder::class);
        $this->call(Apk4AppTagTableSeeder::class);
        $this->call(Apk4CategoryTableSeeder::class);
        $this->call(Apk4EditorNumberStatisticsTableSeeder::class);
        $this->call(Apk4GameTableSeeder::class);
        $this->call(Apk4GameImgTableSeeder::class);
        $this->call(Apk4GameListTableSeeder::class);
        $this->call(Apk4GamePackTableSeeder::class);
        $this->call(Apk4GameTagTableSeeder::class);
        $this->call(Apk4PlatTableSeeder::class);
        $this->call(Apk4PolycatCategoryTableSeeder::class);
        $this->call(Apk4TagsTableSeeder::class);
    }
}
