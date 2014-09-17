<?php

function gravatar_url($email, $size)
{	
	$size = (int)$size;
	return 'http://www.gravatar.com/avatar/' . md5($email) . "?s=$size";
}

function link_to_task(Task $task)
{
	return link_to_route('user.task.show', $task->title, [$task->user->username, $task->id]);
}