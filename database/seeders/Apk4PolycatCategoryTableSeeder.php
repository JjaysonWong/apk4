<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Apk4PolycatCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apk4_polycat_category')->delete();
        
        \DB::table('apk4_polycat_category')->insert(array (
            0 => 
            array (
                'id' => 6,
                'pid' => 0,
                'name' => 'home',
                'catalog' => 'homexxcjyw',
                'catalog_key' => 'home',
                'seo_title' => 'Free APK Download on Android - Download Apps with Free Online APK Downloader',
                'seo_keywords' => 'apk download, apk downloader, android apk download',
                'seo_description' => 'Download Android APK Files fast and free on APK4399. Discover and update Android apps and games with free APK downloader for Android mobile devices.',
                'sort_order' => 1,
                'addtime' => 1711532536,
                'uptime' => 1711541228,
                'status' => 1,
                'addadmin' => 1,
                'upadmin' => 1,
            ),
            1 => 
            array (
                'id' => 7,
                'pid' => 0,
                'name' => 'special',
                'catalog' => 'subclass',
                'catalog_key' => 'subclass',
                'seo_title' => 'subclass-apk42',
                'seo_keywords' => 'subclass-apk42',
                'seo_description' => 'subclass-apk42',
                'sort_order' => 1,
                'addtime' => 1718192374,
                'uptime' => 1718192449,
                'status' => 1,
                'addadmin' => 101,
                'upadmin' => 101,
            ),
            2 => 
            array (
                'id' => 8,
                'pid' => 7,
                'name' => 'Game Topic',
                'catalog' => 'subclass/game',
                'catalog_key' => 'subclass/game',
                'seo_title' => 'Game Topic apk42',
                'seo_keywords' => 'Game Topic apk42',
                'seo_description' => 'Game Topic apk42',
                'sort_order' => 1,
                'addtime' => 1718192517,
                'uptime' => 1718192517,
                'status' => 1,
                'addadmin' => 101,
                'upadmin' => 101,
            ),
            3 => 
            array (
                'id' => 9,
                'pid' => 7,
                'name' => 'APP Topic',
                'catalog' => 'subclass/app',
                'catalog_key' => 'subclass/app',
                'seo_title' => 'APP Topic apk42',
                'seo_keywords' => 'APP Topic apk42',
                'seo_description' => 'APP Topic apk42',
                'sort_order' => 1,
                'addtime' => 1718192570,
                'uptime' => 1718192570,
                'status' => 1,
                'addadmin' => 101,
                'upadmin' => 101,
            ),
        ));
        
        
    }
}