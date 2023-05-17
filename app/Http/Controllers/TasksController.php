<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class TasksController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function delete(Task $taskToDelete)
    {
        #Code...
    }

    public function create(Task $newTask)
    {

    }

    public function index()
    {
        return "Hello";
    }
}

