<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;
use App\Models\Department;

/**
 * Contactリポジトリ実装クラス
 */
class ContactRepository implements ContactRepositoryInterface
{
  /**
   * すべてのContactレコードを取得する。
   *
   * @return \Illuminate\Database\Eloquent\Collection|Contact[]
   */
  public function getAll()
  {
    return Contact::all();
  }

  /**
   * すべてのDepartmentのidとnameを取得する。
   *
   * @return \Illuminate\Support\Collection
   */
  public function getDepartmentNames()
  {
    return Department::pluck('name', 'id');
  }
}
