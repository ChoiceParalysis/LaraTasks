{{ Form::open(['url' => '/tasks', 'data-remote', 'data-remote-success-message' => 'All done!', 'class' => 'form']) }}

	<h2 class="title">Create new task</h2>

	<div class="form-group">
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ $errors->first('title', '<div class="error">:message</div>') }}
	</div>

	<div class="form-group">
		{{ Form::label('body', 'Body:') }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		{{ $errors->first('body', '<div class="error">:message</div>')}}
	</div>

	<div class="form-group">
		{{ Form::label('user_id', 'Assign to:') }}
		{{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Add task', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}