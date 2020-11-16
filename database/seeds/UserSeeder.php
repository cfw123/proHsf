<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 调用数据工厂
        factory(\App\Models\User::class,100)->create();
        \App\Models\User::find(1)->update([
            'username' => 'admin'
        ]);
    }
}
