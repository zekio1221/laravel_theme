@foreach($contacts as $contact) 
{{ $contact->name }} <br />
{{ $contact->email }}<br />
{{ $contact->age }}
@endforeach
