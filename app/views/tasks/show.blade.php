@extends('layouts.layout')

@section('content')

	<div class="col-md-6 col-md-offset-3">

		<h3 class="title">{{ $task->title }}</h3>

		<article class="body">{{ $task->body }}</article>

		{{ link_to('/', 'Back to main menu') }}

	</div>

@stop