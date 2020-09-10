
{{-- STAMPO I DETTAGLI DEGLI ALBUM --}}
<ul>
  <li>
    <div class="">
      {{-- Nome Album --}}
      <h3>Nome Album</h3>
      <span>{{$album->title}}</span>
    </div>

    <div class="">
      {{-- Artista Album --}}
      <h3>Artista Album</h3>
      <span>{{$album->artist}}</span>
    </div>

    <div class="">
      {{-- Anno di rilascio --}}
      <h3>Anno di rilascio</h3>
      <span>{{$album->year}}</span>
    </div>

    <div class="">
      {{-- Immagine di copertina --}}
      <h3>Immagine Album</h3>
      <img src="{{$album->covers->url}}" alt="{{$album->title}}">
    </div>

  </li>
</ul>

{{-- LISTA DEI BRANI ASSOCIATI ALL'ALBUM --}}
<h2>Lista brani:</h2>

<ul>
  @foreach ($album->songs as $song)
    <li>
       <div class="">
         {{-- Nome del brano --}}
        <strong>Nome Brano:</strong> {{$song->title}}
        {{-- Genere --}}
        <strong>Genere:</strong> {{$song->genre}}
      </div>

      <ul>
        {{-- TAGS COLLEGATI ALLE CANZONI --}}
        @foreach ($song->tags as $tag)
          <li><strong>Tags:</strong> <em>{{$tag->name}}</em></li>
        @endforeach

      </ul>
        <hr>
    </li>
  @endforeach
</ul>
