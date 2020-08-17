<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if (! Gate::allows('categories')) {
            return abort(401);
        }
        $categories = Category::whereRaw('true')->orderBy('id','desc');
        $q=request()->get("q");
        $status=request()->get("published");
        if($q){
            $categories->where('name','like',"%{$q}%");
        }
        if($status!=null){
            $categories->where('status',$status);
        }

        $categories = $categories->paginate(1)->appends(["q"=>$q,"status"=>$status]);
        return view('admin.category.index')->withCategories($categories);
       }

    public function create()
    {
        if (! Gate::allows('category_create')) {
            return abort(401);
        }
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        if (! Gate::allows('category_store')) {
            return abort(401);
        }
        if(!$request->status){
            $request['status']=0;
        }
        $image = basename($request->imageFile->store("public"));
        $request['image'] = $image;

        Category::create($request->all());
        \Session::flash("msg","category created succesfully");
        return redirect(route('categories.index'));
    }

    public function show($id)
    {
        if (! Gate::allows('category_show')) {
            return abort(401);
        }
        $category = Category::find($id);
        if(!$category){
           session()->flash("msg", "The category was not found");
           return redirect(route("category.index"));
        }
        return view("admin.category.show")->withCategory($category);
    }

    public function status($id){
        $category=Category::find($id);
        $category->update(['status'=>!$category->status]);
        session()->flash('msg','w: Category status updated');
        return redirect()->back();
    }

    public function edit($id)
    {
        if (! Gate::allows('category_edit')) {
            return abort(401);
        }

        $category = Category::find($id);
        if($category==null){
           session()->flash("msg", "The category was not found");
           return redirect(route("category.index"));
        }
        return view("admin.category.edit")->withCategory($category);
    }

    public function update(EditCategoryRequest $request, $id)
    {
        if (! Gate::allows('category_update')) {
            return abort(401);
        }

        if (!$request->status) {
            $request['status'] = 0;
        }
        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['image'] = $imageName;
        }
        Category::find($id)->update($request->all());
        session()->flash("msg", "The category was updated");
        return redirect(route("categories.index"));
    }
    public function destroy($id)
    {
        if (! Gate::allows('category_destroy')) {
            return abort(401);
        }
        $category = Category::find($id);
        if(!$category){
            Session()->flash('msg','category not found');
            return redirect(route('categories.index'));
        }
        Category::destroy($id);
        session()->flash("msg", " category Deleted Successfully");
        return redirect(route("categories.index"));
    }
}
