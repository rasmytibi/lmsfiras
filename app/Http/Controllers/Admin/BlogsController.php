<?php

namespace App\Http\Controllers\Admin;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogsRequest;
use App\Http\Requests\Admin\UpdateBlogsRequest;

class BlogsController extends Controller
{

    public function index(Request $request)
    {
        if (!Gate::allows('blogs_access')) {
            return abort(401);
        }
        if (request('show_deleted') == 1) {
            if (!Gate::allows('blogs_delete')) {
                return abort(401);
            }
            $blogs =blogs::onlyTrashed()->get();
        } else {
            $blogs = blogs::whereRaw('true')->orderBy('id','desc');
        }
        $q=request()->get("q");
        $published=request()->get("published");

        if($q){
            $blogs->where('title','like',"%{$q}%");
        }
        if($published!=null){
            $blogs->where('published',$published);
        }

        $blogs = $blogs->paginate(7)->appends(["q"=>$q,"published"=>$published]);

        return view('admin.blogs.index', compact(['blogs']));
    }

    public function status($id){
        $blog=blogs::find($id);
        $blog->update(['published'=>!$blog->published]);
        session()->flash('msg','w: blog status updated');
        return redirect()->back();
    }
    public function statuss($id){
        $blog=blogs::find($id);
        $blog->update(['slider_show'=>!$blog->slider_show]);
        session()->flash('msg','w: blog status updated');
        return redirect()->back();
    }
    public function create()
    {
        if (! Gate::allows('blogs_create')) {
            return abort(401);
        }
        $blogs = blogs::get();

        return view('admin.blogs.create', compact('blogs'));
    }

    public function store(StoreBlogsRequest $request)
    {

        if (! Gate::allows('blogs_create')) {
            return abort(401);
        }
        if(!$request->published){
        $request['published']=0;
    }
        if(!$request->slide_show){
            $request['slider_show']=0;
        }


         $image = basename($request->imageFile->store("public"));
         $request['blog_image'] = $image;

        blogs::create($request->all());
//        dd($request->all());
        return redirect()->route('blogs.index');
    }

    public function show( $id)
    {
        if (! Gate::allows('blogs_view')) {
            return abort(401);
        }
        $blogs = blogs::get();

        $blogs = blogs::findOrFail($id);

        return view('admin.blogs.show', compact('blogs'));
    }

    public function edit($id)
    {
        if (! Gate::allows('blogs_edit')) {
            return abort(401);
        }

        $blogs = blogs::find($id);

        return view('admin.blogs.edit', compact('blogs'));
    }


    public function update(UpdateBlogsRequest $request,$id)
    {
        if (! Gate::allows('blogs_edit')) {
            return abort(401);
        }
        if(!$request->published){
            $request['published']=0;
        }
        if(!$request->slider_show){
            $request['slider_show']=0;
        }
        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['blog_image'] = $imageName;
        }

        $blogs = blogs::find($id);
        $blogs->update($request->all());
        Session()->flash("msg", "The blog was updated");
        return redirect()->route('blogs.index',$blogs->id);
    }


}
