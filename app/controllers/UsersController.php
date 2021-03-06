<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($username)
	{

		$tasks = Task::byUsername($username);

		return View::make('tasks.index', compact('tasks'));
		}

	public function show($username, $taskId)
	{
		$task = Task::find($taskId, $username);

		return View::make('tasks.show', compact('task'));

	}


}
