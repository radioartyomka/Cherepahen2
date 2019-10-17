@extends('layouts.base')
@section('content')
  <div class='rooms'>
  @foreach($objs as $one)
  <div class='room_io'>
   <a href="{{asset('room/'.$one->id)}}">room {{$one->id}}</a>
   </div>
  @endforeach
  </div>
<p class="fig"><img src="images/Spur0.png" style="position:absolute;right:580px;top:110px" width="800" height="400" alt="альтернативный текст"> </p>
<p class="cwd"><a href="{{asset('start')}}" target="_self" style="position:absolute;right:910px;top:400px" class="cwda" title="Старт">Старт</a></p>
  <img src="images/teleg.png" style="position:absolute;left:100px;top:800px" width="70" height="70" alt="альтернативный текст">  
  <img src="images/Twitter.png" style="position:absolute;left:200px;top:800px" width="70" height="70"  alt="альтернативный текст"> 
  <img src="images/vk.png" style="position:absolute;left:300px;top:800px" width="70" height="70" alt="альтернативный текст"> 
  <img src="images/instagram.jpg" style="position:absolute;left:400px;top:800px" width="70" height="70" alt="альтернативный текст"> 
  @endsection