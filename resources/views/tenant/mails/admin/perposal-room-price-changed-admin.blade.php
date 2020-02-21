@component('mail::message')
Dear {{ $perposal->lead->group_contact }}! <br>
Room price of propsal has been updated by {{ $perposal->lead->hotel->name }} hotel.<br>
To see the proposal , click on the  below link or copy the url and paste in browser search bar.<br>
<a href="{{ $url }}">{{ $url }}</a><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent

