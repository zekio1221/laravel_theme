<?php

namespace App\Services;

interface ContactServiceInterface
{
  /**
     * すべてのお問い合わせを取得する。
     *
     * @return Collection
     */
  public function getAll();
  /**
     * すべての部署名を取得する。
     *
     * @return array
     */
  public function getDepartmentNames();
}
