Hi {{$user->firstname}} {{$user->lastname}} @if(is_object($user->adminRole)) you are added as {{$user->adminRole->name}}. @endif<br>
Click Bellow link to Set your password.<br>
<a href="{{ $url }}">{{ $url }}</a>