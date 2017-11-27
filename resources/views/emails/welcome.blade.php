@component('mail::message')
# {{$data['subject']}}
## {{$data['title']}} {{$data['name']}}

{{$data['template']}}

## {{$data['name']}},


Thanks,<br>
{{ config('app.name') }}
@endcomponent
