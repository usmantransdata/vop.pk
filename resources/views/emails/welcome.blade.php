@component('mail::message')


{!!$data['template']!!}




Thanks,<br>
{{ config('app.name') }}
@endcomponent
