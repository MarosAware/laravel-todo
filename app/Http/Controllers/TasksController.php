<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    protected $taskModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Task $task)
    {
        $this->taskModel = $task;
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $categories = $user->categories()->has('tasks')->with(array('tasks' => function($query) {
           $query->orderBy('priority', 'DESC');
        }))->get();

        return view('tasks.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priorityTypes = $this->taskModel->getPriorityTypes();
        $categories = auth()->user()->categories;

        return view('tasks.create', compact('priorityTypes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTask $request)
    {
        $user = auth()->user();
        $request->request->add(['user_id' => $user->id]);

        $task = $this->taskModel->create($request->all());
        $user->addTask($task);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $categoryName = $task->category->name;
        return view('tasks.show', compact('task', 'categoryName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $categories = auth()->user()->categories()->pluck('name', 'id');

        return view('tasks.edit', compact('task', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTask $request,  Task $task)
    {

        $task->update($request->all());

        if($request->ajax()) {
            return response()->json(['success' => true, 'data' => $task], 200);
        }

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('home');
    }
}
