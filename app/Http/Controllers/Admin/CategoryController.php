<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel as Category;
use Validator;
use Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.categories.list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description'=>'required',
            'number_of_jobs'=>'required|numeric',
            'is_active'=>'required|numeric',
            'icon' => 'required|mimes:png,jpg,jpeg',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $category = new Category();

        $fileName = Str::random(10).'_'.$request->icon->getClientOriginalName();
        $request->icon->move('admin/images/categories/',$fileName);

        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        
        $category->icon = $fileName;
        $category->name = $request->name;
        $category->slug = $slug;
        $category->description = $request->description;
        $category->number_of_jobs = $request->number_of_jobs;
        $category->is_active = $request->is_active;
        $category->save();
        
        $request->session()->flash('status', 'Category has been Added successfully');
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description'=>'required',
            'number_of_jobs'=>'required|numeric',
            'is_active'=>'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }

        $category = Category::findOrFail($id);

        if($request->hasFile('icon')){
            $fileName = Str::random(10).'_'.$request->icon->getClientOriginalName();
            $request->icon->move('admin/images/categories/',$fileName);
            $category->icon = $fileName;
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->number_of_jobs = $request->number_of_jobs;
        $category->is_active = $request->is_active;
        $category->save();
    
        $request->session()->flash('status', 'Category has been Updated successfully');
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Category::destroy($id)){
            return redirect('/admin/category')->with('status','Category has been Deleted successfully');
        }
    }
}
