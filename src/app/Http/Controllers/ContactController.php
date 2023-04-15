<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
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
        $contacts = $this->contactService->getAll();
        return view('contacts.index', compact('contacts'));
    }

    public function create(Request $request)
    {
        $departments = $this->contactService->getDepartmentNames();
        return view('contacts.create', compact('departments'));
    }

    public function store(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->content;
        $contact->age = $request->age;
        $contact->gender = $request->gender;
        $contact->department_id = $request->department_id;
        $contact->save();
        return redirect('contacts');
    }
}
