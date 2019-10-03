@extends('layouts.base')
@section('content')
  <div class='rooms'>
  <a class='room' href="{{asset('1')}}"> room 1 </a>
  <a class='room' href="{{asset('2')}}"> room 2 </a>
  <a class='room' href="{{asset('3')}}"> room 3 </a>
  </div>
<p class="fig"><img src="images/Spur0.png" style="position:absolute;right:580px;top:110px" width="800" height="400" alt="альтернативный текст"> </p>
<p class="cwd"><a href="" target="_self" style="position:absolute;right:910px;top:400px" class="cwda" title="Старт">Старт</a></p>
  <img src="images/teleg.png" style="position:absolute;left:100px;top:800px" width="70" height="70" alt="альтернативный текст">  
  <img src="images/Twitter.png" style="position:absolute;left:200px;top:800px" width="70" height="70"  alt="альтернативный текст"> 
  <img src="images/vk.png" style="position:absolute;left:300px;top:800px" width="70" height="70" alt="альтернативный текст"> 
  <img src="images/instagram.jpg" style="position:absolute;left:400px;top:800px" width="70" height="70" alt="альтернативный текст"> 
  @endsection