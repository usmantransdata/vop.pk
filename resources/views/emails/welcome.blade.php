@component('mail::message')
# {{$data['subject']}}

## {{$data['title']}} {{$data['name']}},

{!!$data['template']!!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
