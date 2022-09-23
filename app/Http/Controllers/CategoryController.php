<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryformRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();
        // dd($data);
        return view('backend.category.index', $data);

        // $categories = Category::all();
        // return view('backend.category.index', ['categories' => $categories]);

        // $categories = Category::all();
        // return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryformRequest $request)
    {
        // dd($request->all());

        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // Category::create($data);
        //  return back();

        // $data = new Category();
        // $data->name = $request->name;
        // $data->description = $request->description;
        // $data->save();

        // return back();

        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        // ],[
        //     'name.required' => 'Name filed must be filled up.',
        //     'description.required' => 'Description filed must be filled up'
        // ]);

        $request->validated();

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        //option-1
        // $request->session()->flash('success', 'Category Created successful!');
         //option-2
         // session()->flash('success', 'Category Created successful!');
        //option-3
         // Session::flash('success', 'Category Created successful!');
         //option-4
        return redirect()->route('categories.index')->with('success', 'Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // $data['category'] = $category;
        // return view('backend.category.show', $data);

        // return view('backend.category.show', ['category' => $category]);

        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //  $data['category'] = $category;
        // return view('backend.category.edit', $data);

        // return view('backend.category.edit', ['category' => $category]);

        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryformRequest $request, Category $category)
    {
        // dd($request->all());

        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // $category->update($data);
        // return redirect()->route('categories.index');

        // $data = Category::find($category->id);
        // $data->name = $request->name;
        // $data->description = $request->description;
        // $data->save();
        // return redirect()->route('categories.index');

        // Category::where('id', $category->id)->update([
        //     'name' => $request->name,
        //     'description' => $request->description,
        // ]);

        // return redirect()->route('categories.index');
        $request->validated();

        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
