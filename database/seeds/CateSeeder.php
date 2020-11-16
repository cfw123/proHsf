<?php

use Illuminate\Database\Seeder;
use App\Models\Cate;

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
