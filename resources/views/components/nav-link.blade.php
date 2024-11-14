@props(['active' => false, 'types' => 'a'])

@if($types === 'a')
<a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}" aria-current="{{request()->is('/') ? "page" : "false"}}">{{$slot}}</a>
@else
<button style="background-color: aqua" >{{$slot}}</button>
@endif

