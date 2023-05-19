<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class TasksController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function delete(Task $taskToDelete)
    {
        #Code...
    }

    public function create(Request $request) : RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }


    public function index()
    {

        $tasks = Task::orderBy('create', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }
}

