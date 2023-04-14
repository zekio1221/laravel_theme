<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactServiceInterface;
use App\Models\Contact;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }
    public function index(Request $request)
    {
        // $contacts = Contact::all();
        $contacts = $this->contactService->getAll();
        return view('contacts.index', compact('contacts'));
    }
}
