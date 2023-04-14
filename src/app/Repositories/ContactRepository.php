<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
  public function getAll()
  {
    return Contact::all();
  }
}
