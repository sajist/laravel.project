@extends('layouts.panel')
@section('main')
  
<div class="breadcrumb">
      
    </div>
    <div class="main-contet padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">دسته بندی ها</p>
                <div class="bg-white table__box">
                    <table class="table">
                        <thead role="rowgroup">
                          <tr role="row" class="title-row">
                              <th>شناسه</th>
                              <th>نام دسته بندی</th>
                              <th>نام انگلیسی دسته بندی</th>
                              <th>دسته پدر</th>
                              <th>عملیات</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr role="row" class="">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->getParentName() }}</td>
                                <td>
                                    <a href="{{ route('categories.destroy', $category->id) }}" onclick="destroyCategory(event, {{ $category->id }})" class="item-delete mlg-15" title="حذف"></a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="item-edit " title="ویرایش"></a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" id="destroy-category-{{ $category->id }}">
                                      @csrf
                                      @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
            <div class="col-4 bg-white">
                  <p class="box__title">ایجاد دسته بندی جدید</p>
                  <form action="{{ route('categories.store') }}" method="POST" class="padding-30">
                      @csrf
                      <input type="text" name="name" placeholder="نام دسته بندی" class="text">
                      @error('name')
                        <p class="error">{{ $message }}</p>
                      @enderror

                      <input type="text" name="slug" placeholder="نام انگلیسی دسته بندی" class="text">
                      @error('slug')
                        <p class="error">{{ $message }}</p>
                      @enderror

                      <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>

                      <select class="select" name="category_id" id="category_id">
                          <option value="">ندارد</option>
                          @foreach($parentCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                      @error('category_id')
                        <p class="error">{{ $message }}</p>
                      @enderror

                      <button class="btn btn-webamooz_net">اضافه کردن</button>
                  </form>
            </div>
        </div>
    </div>

  <script>
    function destroyCategory(event, id) {
      event.preventDefault();
      document.getElementById('destroy-category-' + id).submit();
    }
  </script>
@endsection