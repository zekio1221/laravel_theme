@foreach($contacts as $contact) 
{{ $contact->department_id }} <br />
{{ $contact->name }} <br />
{{ $contact->email }}<br />
{{ $contact->age }}<br />
@endforeach
