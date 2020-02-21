@component('mail::message')

The Proposal has been accepted for  booking request of {{ $perposal->lead->hotel->name }} hotel by {{ $perposal->lead->group_contact }}.<br>
To see the proposal , click on the  below link or copy the url and paste in browser search bar.<br>
<a href="{{ $url }}">{{ $url }}</a><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
