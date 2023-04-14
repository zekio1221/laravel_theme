<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * データベースのシードを実行
     *
     * @return void
     */
    public function run()
    {
        // テストデータを登録
        Department::factory()->count(20)->create();
    }
}
