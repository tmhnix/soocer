<ul class="tabNav-BottomLine">
 @foreach($sabagame as $key=> $value)
  <li class="@php if($key== $game) echo 'active'; @endphp" onclick="location.href='/statement.aspx?type=sabagame&game={{ $key }}'">{{ $value['title'] }}</li>
  @endforeach
</ul>
@if($game == 'taixiu') 
  @include('web.v2.iframe.sabagame.taixiu')
@elseif($game == 'xocdia')
  @include('web.v2.iframe.sabagame.taixiu')
@endif
