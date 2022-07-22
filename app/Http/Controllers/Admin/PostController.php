<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Admin\Category\Category;
use App\Models\Admin\Post\Post;
use Dotenv\Exception\ValidationException;

use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(3);
        return view('panel.posts.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $categoryIds = Category::whereIn('name', $request->categories)->get()->pluck('id')->toArray();

        if(count($categoryIds) < 1) {
            throw ValidationException::withMessages([
                'categories' => ['دسته بندی یافت نشد.']
            ]);
        }

        $file = $request->file('file');

        $file_name = $file->getClientOriginalName();

        $file->storeAs('images/banners', $file_name);

        $data = $request->validated();
        $data['file'] = $file_name;
        $data['user_id'] = auth()->user()->id;

        $post = Post::create(
            $data
        );

        $post->categories()->sync($categoryIds);

        session()->flash('status', 'مقاله به درستی ایجاد شد.');

        return redirect()->route('posts.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Post\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('panel.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Post\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $categoryIds = Category::whereIn('name', $request->categories)->get()->pluck('id')->toArray();

        if(count($categoryIds) < 1) {
            throw ValidationException::withMessages([
                'categories' => ['دسته بندی یافت نشد.']
            ]);
        }

        $data = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('images/banners', $file_name);

            $data['file'] = $file_name;
        }


        $post->update(
            $data
        );

        $post->categories()->sync($categoryIds);

        session()->flash('status', 'مقاله به درستی ویرایش شد.');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Post\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('status', 'مقاله به درستی حذف شد');

        return back();
    }
}
