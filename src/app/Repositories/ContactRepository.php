<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;
use App\Models\Department;

class ContactRepository implements ContactRepositoryInterface
{
  public function getAll()
  {
    return Contact::all();
  }

  public function getDepartmentNames()
  {
    return Department::pluck('name','id');
  }
}
