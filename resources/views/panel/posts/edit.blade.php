@extends('layouts.panel')

@section('main')
<br>
<br>
<br>
<br>
<br>
<div class="container ">
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                 آپلود فایل
            </header>
            <ul class="tags">
              @foreach($post->categories as $category)
              <li class="addedTag">{{ $category->name }}<span class="tagRemove" onclick="$(this).parent().remove();">x</span>
                  <input type="hidden" value="{{ $category->name }}" name="categories[]">
              </li>
              @endforeach
              <li class="tagAdd taglist">
                  <input type="text" id="search-field">
              </li>
          </ul>
          @error('categories')
            <p class="error">{{ $message }}</p>
          @enderror
            <div class="panel-body">
                <form role="form" action="{{ route('posts.update' , $post->id) }}" enctype="multipart/form-data" method="POST">
                  @csrf
                  @method('put')

                    <div class="form-group">
                        <label for="exampleInputEmail1">اپدیت  فایل  </label>
                        <input type="text" name="title"  value="{{ $post->title }}" class="form-control" id="exampleInputEmail1" placeholder="ایمیل وارد کنید">
                    </div>
                    @error('title')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <div >
                        <textarea placeholder="متن پست" class="form-control" {!! $post->content !!} name="content"></textarea>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">ارسال فایل</label>
                        <input type="file" id="exampleInputFile" name="file" accept="image/*">
                        @error('file')
                        <p class="error">{{ $message }}</p>
                      @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info">goo</button>
                </form>

            </div>
        </section>
    </div>
</div>

@endsection