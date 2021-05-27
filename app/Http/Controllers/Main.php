<?php

namespace App\Http\Controllers;

use App\Models\Task;
use DateTime;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\task;

class Main extends Controller
{

    public function home(){

        $tasks = Task::orderBy('created_at', 'desc')->get();

        return view( 'home', ['tasks' => $tasks] );
    }

    public function new_task(){
        return view('new_task_frm');
    }

    public function new_task_submit(Request $request){

        if(!$request-> isMethod('post')){ die('Erro');}

        $new_task = $request->input("text_new_task", 'default');

        $task = new Task();
        $task->task = $new_task;
        $task->save();

        return redirect()->route('home');
    }

    public function task_done($id){
        $task = Task::find($id);
        $task->done = new DateTime();
        $task->save();

        return redirect()->route('home');

    }

    public function task_undone($id){
        $task = Task::find($id);
        $task->done = null;
        $task->save();

        return redirect()->route('home');

    }

    public function edit_task_frm($id){
        $task = Task::find($id);
        return view('edit_task_frm', ['task' => $task]);
    }

    public function edit_task_submit(Request $request){

        if(!$request-> isMethod('post')){ die('Erro');}

        $edit_task = $request->input("text_edit_task", 'default');
        $id = $request->input("id_task", 'default');

        $task = Task::find($id);
        $task->task = $edit_task;
        $task->save();
        return redirect()->route('home');
    }

    public function task_visible($id){
        $task = Task::find($id);
        $task->visible = 1;
        $task->save();

        return redirect()->route('home');

    }

    public function task_invisible($id){
        $task = Task::find($id);
        $task->visible = 0;
        $task->save();

        return redirect()->route('home');

    }



    public function task_delete($id){
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('home');

    }
}
