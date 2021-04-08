
<h1>Los nombres obtenidos son :</h1>

<select name="nombres" id="nombres">
{{-- @foreach ($nombres as $nombre)
<option value="{{$nombre}}">{{$nombre}}</option>
@endforeach --}}
</select>
@foreach ($ids as $id)
<h1>hola el id es... {{$id->id}}</h1>
@endforeach
