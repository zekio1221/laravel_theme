<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;
use Carbon\Carbon;
use Faker\Factory as FakerFactory;

class DepartmentFactory extends Factory
{
    /**
     * ファクトリーの対応するモデル名
     *
     * @var string
     */
    protected $model = Department::class;
    /**
     * モデルのデフォルト状態を定義する
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('ja_JP');
        $now = Carbon::now();
        static $num = 1; //インクリメントするために静的プロパティにする

        return [
            'name' => '部署' . $num++, //部署(番号)
            'manager_name' => $faker->lastName . ' ' . $faker->firstName, //苗字と名前
            'deleted_at' => null,
            'created_at' => $now,
            'updated_at' => $now,
        ];
    }
}
