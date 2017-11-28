@component('mail::message')
# Forget Password

{!!$data['template']!!}

@component('mail::button', ['url' => ''])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
