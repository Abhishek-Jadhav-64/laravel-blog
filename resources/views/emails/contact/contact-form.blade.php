@component('mail::message')

    # Thank you for this message

    <strong>Name</strong> {{ $data['name'] }}
    <strong>Email</strong> {{ $data['email'] }}

    <strong>Message</strong>

    {{ $data['message'] }}

@endcomponent
