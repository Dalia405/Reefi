@component('mail::message')


<h2>Hello User,</h2>

Email received from:Dalia Mahmoud

User information:

Email: {{$data['email']}}

Message: {{$data['message']}}

Thank you

@endcomponent
