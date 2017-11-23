@component('mail::message')
# {{$data['subject']}}

{!!$data['template']!!}

## {{$data['name']}},


Thanks,<br>
{{ config('app.name') }}
@endcomponent
