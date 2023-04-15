<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepositoryInterface;

/**
 * Contact モデルに関するビジネスロジックを実装するためのサービスクラス
 */
class ContactService implements ContactServiceInterface
{
  /**
   * ContactRepositoryInterface のインスタンス
   *
   * @var ContactRepositoryInterface
   */
  protected $contactRepository;

  /**
   * 新しい ContactService インスタンスの生成
   *
   * @param ContactRepositoryInterface $contactRepository
   */
  public function __construct(ContactRepositoryInterface $contactRepository)
  {
    $this->contactRepository = $contactRepository;
  }

  /**
   * データベースからすべての Contact モデルのレコードを取得する
   *
   * @return \Illuminate\Database\Eloquent\Collection
   */
  public function getAll()
  {
    return $this->contactRepository->getAll();
  }

  /**
   * データベースから Department モデルの name カラムと id カラムの値を取得する
   *
   * @return \Illuminate\Support\Collection
   */
  public function getDepartmentNames()
  {
    return $this->contactRepository->getDepartmentNames();
  }
}
