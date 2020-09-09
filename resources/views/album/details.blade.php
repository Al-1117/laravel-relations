
<ul>
  <li> <strong>Nome Album:</strong> <h3> {{$album->title}}</h3></li>
  <li> <strong>Artista Album:</strong> {{$album->artist}} </li>
  <li> <strong>Anno di rilascio:</strong>{{$album->year}} </li>
</ul>

<h2>Lista brani:</h2>

<ul>
  @foreach ($album->songs as $song)
    <li> <strong>Nome Brano:</strong> {{$song->title}} </li>
    <li> <strong>Genere:</strong> {{$song->genre}} </li>
  @endforeach
</ul>
