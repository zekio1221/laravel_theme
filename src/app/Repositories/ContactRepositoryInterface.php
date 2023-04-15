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
}
