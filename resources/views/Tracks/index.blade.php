@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style type="text/css">
		h2	{
			margin-bottom: 20px;
			margin-top: 15px;
			color: #BDB76B;
			font-family: 'Fredoka One';
			font-size: 35px;
			
		}

		table th {
			color: #006400;
			font-family: century gothic;
		}

		table {
			margin-top: 10px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container">
	<h2>DATA TRACKS</h2>
	<a  href="{{ url('tracks/create') }}" class="btn btn-success bg-succes">+ Tambah Data</a>
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:#BDB76B">
			<th scope="col">NO</th>
			<th scope="col">JUDUL LAGU</th>
			<th scope="col">ARTIS-ALBUM</th>
			<th scope="col">NAMA  FILE</th>
			<th scope="col">DURASI</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #3CB371; color: #006400">
			<td>{{ $row->id }}</td>
			<td>{{ $row->tracks_name }}</td>
			<td>{{ $row->album->artist->artist_name }} - {{ $row->album->album_name}}</td>
			<td>{{ $row->tracks_file }}</td>
			<td>{{ $row->tracks_time }}</td>

			<td>
				<a href="{{ url('tracks/' . $row->id . '/edit')}}" class="btn btn-warning">EDIT</a>
				
				<form action="{{ url('tracks/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	
</div>
</body>
</html>


@endsection