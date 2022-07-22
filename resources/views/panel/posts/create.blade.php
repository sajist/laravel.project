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
            <div class="panel-body">
                <form role="form" action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">مشخصات فایل  </label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="ایمیل وارد کنید">
                    </div>
                    @error('title')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <div >
                        <textarea placeholder="متن پست" class="form-control" name="content"></textarea>
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