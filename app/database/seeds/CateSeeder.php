<?php

use App\Models\Cate;
use Illuminate\Database\Seeder;

class CateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 清空
        Cate::truncate();

        Cate::create([
            'cname' => 'PHP核心'
        ]);
        Cate::create([
            'cname' => 'web前端'
        ]);
        Cate::create([
            'cname' => '工作'
        ]);

    }
}
