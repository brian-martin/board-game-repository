<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
	.uper {
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Add Games Data
	</div>
	<div class="card-body">
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			<br />
		@endif
		<form method="post" action="{{ route('games.store') }}">
				<div class="form-group">
						@csrf
						<label for="country_name">Game Name:</label>
						<input type="text" class="form-control" name="name"/>
				</div>
				<div class="form-group">
						<label for="cases">Publisher :</label>
						<input type="text" class="form-control" name="publisher"/>
				</div>
				<div class="form-group">
						<label for="cases">Nickname :</label>
						<input type="text" class="form-control" name="nickname"/>
				</div>
				<div class="form-group">
						<label for="cases">Rating :</label>
						<input type="text" class="form-control" name="rating"/>
				</div>
				<button type="submit" class="btn btn-primary">Add Game</button>
		</form>
	</div>
</div>
@endsection