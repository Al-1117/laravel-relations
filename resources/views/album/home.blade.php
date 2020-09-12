
<ul>
  {{-- Stampo la lista degli album --}}
  @foreach ($albums as $album)
    <li>
      <strong>Nome Album:</strong> {{$album->title}}
      <a href="{{route('album.show', $album)}}">Ulteriori informazioni</a>

      {{-- Eliminazione dell'album --}}

      <form class="" action="{{route('album.destroy', $album)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="Elimina elemento">
      </form>
     </li>

  @endforeach

  {{-- Link per creare nuovo album --}}
  <h3> <a href="{{route('album.create')}}">Crea nuovo album</a></h3>
</ul>
