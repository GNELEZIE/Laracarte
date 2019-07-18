@component('mail::message')
# Hello Arouna!!!

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::button', ['url' => '','color' => 'success'])
Button Text
@endcomponent

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
