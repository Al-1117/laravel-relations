
<ul>
  <li>
    <div class="">
      <h3>Nome Album</h3>
      <span>{{$album->title}}</span>
    </div>

    <div class="">
      <h3>Artista Album</h3>
      <span>{{$album->artist}}</span>
    </div>

    <div class="">
      <h3>Anno di rilascio</h3>
      <span>{{$album->year}}</span>
    </div>

    <div class="">
      <h3>Immagine Album</h3>
      <img src="{{$album->covers->url}}" alt="{{$album->title}}">
    </div>

  </li>
</ul>

<h2>Lista brani:</h2>

<ul>
  @foreach ($album->songs as $song)
    <li>
       <div class="">
        <strong>Nome Brano:</strong> {{$song->title}}
        <strong>Genere:</strong> {{$song->genre}}
        <hr>
      </div>
    </li>
  @endforeach
</ul>
