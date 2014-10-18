<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/18/2014
 * Time: 1:54 PM
 */

class TasksController extends BaseController {
    public function home(){
        $tasks = Task::all();
        return View::make('home',compact('tasks'));
    }
    public function create(){
        return View::make('create');
    }
    public function saveCreate(){
        $input = Input::all();
        $task = new Task;
        $task->title = $input['title'];
        $task->body = $input['body'];
        $task->save();
        return Redirect::action('TasksController@home');
    }
    public function edit(Task $task){
        return View::make('edit',compact('task'));
    }
    public function doEdit(){
        $task = Task::findOrFail(Input::get('id'));
        $task->title = Input::get('title');
        $task->body = Input::get('body');
        $task->done = Input::get('done');
        $task->save();
        return Redirect::action('TasksController@home');
    }
    public function delete(){
        return View::make('delete');
    }
} 