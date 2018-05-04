<div class="container">
  <h1>articulos</h1>
  @foreach($peoples as $people)
      <li>{{$people->first_name}}</li>
  @endforeach
</div>
