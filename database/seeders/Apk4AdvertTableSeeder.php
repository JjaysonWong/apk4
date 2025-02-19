<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Apk4AdvertTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apk4_advert')->delete();
        
        \DB::table('apk4_advert')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group' => 'pc-首页-轮播图',
                'adtype' => 2,
                'codes' => 'pc-首页-轮播图',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1698743961',
                'is_del' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'group' => 'pc-首页-热门专题',
                'adtype' => 2,
                'codes' => 'pc-首页-热门专题',
                'num' => 1,
                'uid' => 1,
                'addtime' => '1712112056',
                'is_del' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'group' => 'pc-首页-热门资讯',
                'adtype' => 2,
                'codes' => 'pc-首页-热门资讯',
                'num' => 1,
                'uid' => 1,
                'addtime' => '1712112072',
                'is_del' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'group' => 'pc-首页-top游戏',
                'adtype' => 2,
                'codes' => 'pc-首页-top游戏',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711589831',
                'is_del' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'group' => 'pc-首页-top应用',
                'adtype' => 2,
                'codes' => 'pc-首页-top应用',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711589884',
                'is_del' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'group' => 'pc-首页-个性化推荐',
                'adtype' => 2,
                'codes' => 'pc-首页-个性化推荐',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711590060',
                'is_del' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'group' => 'pc-首页-新上线与最近更新',
                'adtype' => 2,
                'codes' => 'pc-首页-新上线与最近更新',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711591108',
                'is_del' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'group' => 'pc-首页-热游排行榜-热门免费',
                'adtype' => 2,
                'codes' => 'pc-首页-热游排行榜-热门免费',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605562',
                'is_del' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'group' => 'pc-首页-热游排行榜-最受期待',
                'adtype' => 2,
                'codes' => 'pc-首页-热游排行榜-最受期待',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605563',
                'is_del' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'group' => 'pc-首页-应用排行榜-热门免费',
                'adtype' => 2,
                'codes' => 'pc-首页-应用排行榜-热门免费',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605562',
                'is_del' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'group' => 'pc-首页-应用排行榜-最受期待',
                'adtype' => 2,
                'codes' => 'pc-首页-应用排行榜-最受期待',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605563',
                'is_del' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'group' => 'pc-游戏详情-好游安利',
                'adtype' => 2,
                'codes' => 'pc-游戏详情-好游安利',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711936151',
                'is_del' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'group' => 'pc-应用详情-应用安利',
                'adtype' => 2,
                'codes' => 'pc-应用详情-应用安利',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711943521',
                'is_del' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'group' => 'm-首页-轮播图',
                'adtype' => 2,
                'codes' => 'm-首页-轮播图',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711953664',
                'is_del' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'group' => 'm-首页-热门专题',
                'adtype' => 2,
                'codes' => 'm-首页-热门专题',
                'num' => 1,
                'uid' => 1,
                'addtime' => '1712112056',
                'is_del' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'group' => 'm-首页-热门资讯',
                'adtype' => 2,
                'codes' => 'm-首页-热门资讯',
                'num' => 1,
                'uid' => 1,
                'addtime' => '1712112072',
                'is_del' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'group' => 'm-首页-top游戏',
                'adtype' => 2,
                'codes' => 'm-首页-top游戏',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711589831',
                'is_del' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'group' => 'm-首页-top应用',
                'adtype' => 2,
                'codes' => 'm-首页-top应用',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711589884',
                'is_del' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'group' => 'm-首页-个性化推荐',
                'adtype' => 2,
                'codes' => 'm-首页-个性化推荐',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711590060',
                'is_del' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'group' => 'm-首页-新上线与最近更新',
                'adtype' => 2,
                'codes' => 'm-首页-新上线与最近更新',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711591108',
                'is_del' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'group' => 'm-首页-热游排行榜-热门免费',
                'adtype' => 2,
                'codes' => 'm-首页-热游排行榜-热门免费',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605562',
                'is_del' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'group' => 'm-首页-热游排行榜-最受期待',
                'adtype' => 2,
                'codes' => 'm-首页-热游排行榜-最受期待',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605563',
                'is_del' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'group' => 'm-首页-应用排行榜-热门免费',
                'adtype' => 2,
                'codes' => 'm-首页-应用排行榜-热门免费',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605562',
                'is_del' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'group' => 'm-首页-应用排行榜-最受期待',
                'adtype' => 2,
                'codes' => 'm-首页-应用排行榜-最受期待',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711605563',
                'is_del' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'group' => 'm-游戏详情-好游安利',
                'adtype' => 2,
                'codes' => 'm-游戏详情-好游安利',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711936151',
                'is_del' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'group' => 'm-应用详情-应用安利',
                'adtype' => 2,
                'codes' => 'm-应用详情-应用安利',
                'num' => 10,
                'uid' => 1,
                'addtime' => '1711943521',
                'is_del' => 0,
            ),
        ));
        
        
    }
}