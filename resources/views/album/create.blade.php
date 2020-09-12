
{{-- FORM PER CREARE UN NUOVO ALBUM --}}

<form class="0" action="{{route('album.store')}}" method="post">
  @csrf
  @method('POST')
  {{-- New Title Data --}}
  <div>
    <label>Title</label>
    <input type="text" name="title" value="{{old('title')}}" placeholder="Inserisci nome album">
  </div>
  {{-- New Artist Data --}}
  <div>
    <label>Artist</label>
    <input type="text" name="artist" value="{{old('artist')}}" placeholder="Inserisci artista album">
  </div>
  {{-- New Year Data --}}
  <div>
    <label>Year</label>
    <input type="number" name="year" value="{{old('year')}}" placeholder="Inserisci anno album">
  </div>

  {{-- Confirm Button --}}

  <div>
    
    <input type="submit" value="Confirm">

  </div>




</form>
