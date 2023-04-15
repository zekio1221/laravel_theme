<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Services\ContactServiceInterface;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * @var ContactServiceInterface
     */
    protected $contactService;

    /**
     * ContactController constructor.
     *
     * @param ContactServiceInterface $contactService
     */
    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * お問い合わせ一覧画面を表示する。
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $contacts = $this->contactService->getAll();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * お問い合わせ入力画面を表示する。
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $departments = $this->contactService->getDepartmentNames();
        return view('contacts.create', compact('departments'));
    }

    /**
     * お問い合わせを登録する。
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
