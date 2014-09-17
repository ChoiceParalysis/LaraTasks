<?php

use Acme\Services\TaskCreatorService;
use Acme\Validators\ValidationException;

class TasksController extends \BaseController {

	protected $taskCreator;

	public function __construct(TaskCreatorService $taskCreator)
	{
		$this->taskCreator = $taskCreator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::with('user')->get();
		$users = User::lists('username', 'id');
		
		return View::make('tasks.index', compact('tasks', 'users'));
	}

	public function show($id)
	{
		$task = Task::findOrFail($id);
		return View::make('tasks.show', compact('task'));
	}

	public function store()
	{	

		$task = new Task(Input::all());

		if (! $task->save()) {
			return Redirect::back()->withInput()->withErrors($task->getErrors());
		}

		return Redirect::home();
	}


}
