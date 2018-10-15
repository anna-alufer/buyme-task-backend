<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UsersTask;

class UsersTaskController extends Controller
{
    public function tasks(){
       // header('Access-Control-Allow-Origin: http://localhost:4200');
        $tasks = UsersTask::all();
        return $tasks;
    }

    public function save(Request $request){

        $this->validate($request, [
            'task_name' => 'required'
        ]);

    
        $saveTask = new UsersTask();
    
        $saveTask->task_name = $request->input('task_name');
       
        $saveTask->save();

        return $saveTask;
       // $input  = $request->all();
        // header('Access-Control-Allow-Origin: http://localhost:4200');
        //  $saved =  json_encode("saved!!");
        //  return $saved;

        //  $task_id = array('task_id' => '5', 'task_name' => 'holla');
        
         
        //  $saved = json_encode($task_id);
         
         
         
     }

     public function delete(Request $request){
        $this->validate($request, [
            'task_id' => 'required|numeric'
        ]);

        $task_id = $request->task_id;
        $deleteTask= UsersTask::where('task_id', '=', $task_id);
        $deleteTask->delete();

     }

     public function update(Request $request){

        $this->validate($request, [
            'task_id' => 'required|numeric',
            'active' => 'required|numeric'
        ]);


        $task_id = $request->task_id;
        $active = $request->active;

        $updateTask= UsersTask::where('task_id', '=', $task_id);
        //$updateTask->active = $active;
        $updateTask->update(['active' => $active]);
     }

     public function updateText(Request $request){
        
                $this->validate($request, [
                    'task_id' => 'required|numeric',
                    'task_name' => 'required'
                ]);
        
        
                $task_id = $request->task_id;
                $task_name = $request->task_name;
        
                $updateTask= UsersTask::where('task_id', '=', $task_id);
                //$updateTask->active = $active;
                $updateTask->update(['task_name' => $task_name]);
             }
}
