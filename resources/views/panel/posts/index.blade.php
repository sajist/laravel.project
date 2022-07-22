@extends('layouts.panel')
@section('main')
  

<br>
<br>
<br>
<div class="continar">
        <div class="bg-white table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>عنوان</th>
                    <th>نویسنده</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr role="row" class="">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <a href="{{ route('posts.destroy', $post->id) }}" onclick="destroyPost(event, {{ $post->id }})" class="item-delete mlg-15" title="حذف"></a>
                            <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="item-edit" title="ویرایش"></a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post" id="destroy-post-{{ $post->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    <img class="w-100% p-10px mb-8" src="{{ asset('images/banners' ,$post->file) }}" alt="" srcset="">
                    <div>
                        {{ $post->content }}
                    </div>
                @endforeach
                </tbody>
            </table>
            {{ $posts->appends(request()->query())->links() }}
        </div>
    </div>
</div>

        <script>
            function destroyPost(event, id) {
                event.preventDefault();
                document.getElementById('destroy-post-' + id).submit();
            }
        </script>
@endsection