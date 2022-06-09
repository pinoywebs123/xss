<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Validations
use App\Http\Requests\Todo;

//Models
use App\Todo as TodoModel;
use App\Category as CategoryModel;

class TodoController extends Controller
{
    public function store(Todo $validated)
    {
        $todo = new TodoModel;
        $todo->todo_name    = $validated->todo_name;
        $todo->category_id  = $validated->category_id;
        $todo->status       = false;
        $todo->save();
        return back()->with('success','Todo Added Successfully');
    }

    public function display($id)
    {
        $categories = CategoryModel::orderBy('category_name','ASC')->get();
        if($id != 0 || $id != '0')
        {
            $find_category = CategoryModel::find($id);
            if($find_category)
            {
                $find_category->with('todos')->first();
                 $todos = $find_category->todos;
                
            }else 
            {
                return back()->with('error', 'Category Not Found');
            }
            
        }else
        {
               $todos = TodoModel::all();
        }
       
        
        return view('todo.index',compact('categories','todos'));
    }

    public function delete($id)
    {
        $find_todo = TodoModel::find($id);
        if(!$find_todo)
        {
            return back()->with('error','Todo not found');
        }
        $find_todo->delete();
        return back()->with('success','Todo Deleted Successfully');
    }

    public function update(Request $request)
    {
        $find_todo = TodoModel::find($request->todo_id);
        if(!$find_todo){
            return response()->json(['message'=> 'Todo Not Found','status'=> 404]);
        }
        if($find_todo->status == true)
        {
            $find_todo->update(['status'=> false]);
        }else 
        {
            $find_todo->update(['status'=> true]);
        }

        return response()->json(['message'=> 'Todo Updated Successfully','status'=> 200]);
    }
}
