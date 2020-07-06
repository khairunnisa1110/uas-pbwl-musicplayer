@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: #BDB76B;
			font-family: 'Fredoka One';
			font-size: 40px;
		}
		
		.btn {
			color: #BDB76B;
		}

		label {
			font-family: 'Josefin Sans'; 
			color: #BDB76B;
		}
		
	</style>
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Input Data Artist</h2>
			<form method="post" action="{{url('/artist')}}">
			@csrf
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Nama Artist</label>:
					<div class="col-sm-5">
							<input type="text" name="artist_name" class=" form-control" id="inputEmail3"style="color: white;background-color: #BDB76B">
					</div>
					</div>
				</table>

				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: #006400 " >SIMPAN</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>
@endsection