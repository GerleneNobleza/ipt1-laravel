<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Release Date</th>	
		<th>Genre</th>
	</tr>

	@foreach ($movies as $movie) 
    <tr>
		<td>{{$movie['id']}}</td>
		<td>{{$movie['title']}}</td>
		<td>{{$movie['releasedate']}}</td>
		<td>{{$movie['genre']}}</td>
    </tr>
	@endforeach
</table>