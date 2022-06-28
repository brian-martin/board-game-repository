@extends('layout')

@section('content')
<style>
    .uper {
    	margin-top: 40px;
    }
</style>
<div class="card uper">
	<div class="card-header">
		Edit Game Data
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
		<form method="post" action="{{ route('games.update', $game->id ) }}">
			<div class="form-group">
				@csrf
				@method('PATCH')
				<label for="country_name">Name:</label>
				<input type="text" class="form-control" name="name" value="{{ $game->name }}"/>
			</div>
			<div class="form-group">
				<label for="cases">Publisher :</label>
				<input type="text" class="form-control" name="publisher" value="{{ $game->publisher }}"/>
			</div>
			<div class="form-group">
				<label for="cases">Nickname :</label>
				<input type="text" class="form-control" name="nickname" value="{{ $game->nickname }}"/>
			</div>
			<div class="form-group">
				<label for="cases">Rating :</label>
				<input type="text" class="form-control" name="rating" value="{{ $game->rating }}"/>
			</div>
			<button type="submit" class="btn btn-primary">Update Game</button>
		</form>
	</div>
</div>
@endsection