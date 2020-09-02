<h1>Show Movies</h1>

<div>
  <ul>
    <li>Titolo: {{ $movie->title }}</li>
    <li>Trama: {{ $movie->description }}</li>
    <li>Anno: {{ $movie->year }}</li>
    <li>Voto: {{ $movie->rating }}</li>
  </ul>
  <a href="{{route('movies.index')}}">Torna a elenco film</a>
</div>