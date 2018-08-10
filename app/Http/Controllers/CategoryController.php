<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class CategoryController extends Controller
{

    private $categoryModel;


    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryModel->latest()->get();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = $this->categoryModel->getAllColors();
        //dump(request()->session()->get('errors'));

        return view('category.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $userId = auth()->user()->id;
        $request->request->add(['user_id' => $userId]);

        $category = $this->categoryModel->create($request->all());

        auth()->user()->addCategory($category);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $colors = $category->getAllColors();

        return view('category.edit', compact('category', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategory  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
