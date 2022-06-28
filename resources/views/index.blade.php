<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
	.uper {
		margin-top: 40px;
	}
</style>
<div class="uper">
	@if(session()->get('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}  
		</div>
		<br />
	@endif
	<div>
		<input type="text" id="game-search" />
		<a href="/games/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Game</a>
	</div>
	<table class="table table-striped" id="games-table">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Publisher</td>
				<td>Nickname</td>
				<td>Rating</td>
				<td colspan="2">Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($games as $game)
			<tr>
				<td>{{$game->id}}</td>
				<td>{{$game->name}}</td>
				<td>{{$game->publisher}}</td>
				<td>{{$game->nickname}}</td>
				<td>{{$game->rating}}</td>
				<td><a href="{{ route('games.edit', $game->id)}}" class="btn btn-primary">Edit</a></td>
				<td>
					<form action="{{ route('games.destroy', $game->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
<div>
@endsection