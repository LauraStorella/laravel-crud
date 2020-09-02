<h1>Elenco Film</h1>

<div>
  <ul>
    @foreach ($movies as $movie)
      <li>Titolo: {{ $movie->title }} <a href="{{route('movies.show', $movie->id)}}">Show details</a></li>
      {{-- <li>Trama: {{ $movie->description }}</li>
      <li>Anno: {{ $movie->year }}</li>
      <li>Voto: {{ $movie->rating }}</li> --}}
    @endforeach
  </ul>
</div>

