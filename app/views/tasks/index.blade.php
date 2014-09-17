@extends('layouts.layout')

@section('content')
	<div class="tasks-list col-md-6">
		<ul class="list-group">
			@foreach($tasks as $task)
				<li class="list-group-item">
					<a href="/{{$task->user->username}}/tasks/"><img src="{{ gravatar_url($task->user->email, 40) }}" alt="{{ $task->user->username }}"></a>
					{{ link_to_task($task) }}
				</li>
			@endforeach
		</ul><!-- end list-group -->
	</div>

@if(isset($users))
	<div class="form-container col-md-6">
		@include('tasks/partials/_form')
	</div>
@endif

@stop