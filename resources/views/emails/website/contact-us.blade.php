@component('mail::message')
    # Contact Us

    A new message from {{$first_name}}  {{$last_name}}<br><br>

    First Name : {{$first_name}}<br>
    Last Name : {{$last_name}}<br>
    E-mail : {{$email}}<br>
    Phone Number : {{$phone}}<br>
    Message : {{$message}}

    Thanks,<br>
@endcomponent
