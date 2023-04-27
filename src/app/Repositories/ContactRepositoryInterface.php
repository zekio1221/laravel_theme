<?php

namespace App\Repositories;


/**
 * お問い合わせリポジトリのインターフェース
 */
interface ContactRepositoryInterface
{
  /**
   * すべてのお問い合わせを取得する。
   *
   * @return \Illuminate\Database\Eloquent\Collection
   */
  public function getAll();
  /**
   * すべての部署名をidをキーに取得する。
   *
   * @return \Illuminate\Support\Collection
   */
  public function getDepartmentNames();

  /**
   * お問合せを作成する。
   * @param string $name 名前
   * @param string $email メールアドレス
   * @param string $content 内容
   * @param int $age 年齢
   * @return int $gender 性別 1:男性 2:女性 3:その他
   * @return int $department_id 問い合わせ部署id
   */
  public function createContact(string $name, string $email, string $content, int $age, int $gender, int $department_id);
}
