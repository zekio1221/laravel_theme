<?php

namespace App\Services;

use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepositoryInterface;


class ContactService implements ContactServiceInterface
{
  protected $contactRepository;

  public function __construct(ContactRepositoryInterface $contactRepository)
  {
    $this->contactRepository = $contactRepository;
  }

  public function getAll()
  {
    return $this->contactRepository->getAll();
  }

  public function getDepartmentNames()
  {
    return $this->contactRepository->getDepartmentNames();
  }
}
