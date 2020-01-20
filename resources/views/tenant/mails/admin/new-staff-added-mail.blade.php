Hi {{$user->firstname}} {{$user->lastname}} you are added as {{$user->adminRole->name}}.<br>
Click Bellow link to Set your password.<br>
<a href="{{ $url }}">{{ $url }}</a>