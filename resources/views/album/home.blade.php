
<ul>
  @foreach ($albums as $album)
    <li><strong>Nome Album:</strong> {{$album->title}}</li>
    <li> <a href="{{route('album.show', $album)}}">Ulteriori informazioni</a> </li>

  @endforeach





</ul>
