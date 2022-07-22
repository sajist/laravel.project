@extends('layouts.panel')

@section('main')
            <section id="main-content">
                <section class="wrapper">
                    <section class="panel">

                            <header class="panel-heading text-right text-bold">
                                جدول پیشرفته
                                </header>
                                <table class="table table-striped table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th><i class="icon-key"></i> ایدی </th>
                                        <th><i class="icon-key"></i> نام  </th>
                                        <th><i class="icon-envelope"></i> ایمیل</th>
                                        <th><i class=" icon-ok"></i> وضعیت</th>
                                        <th><i class=" icon-edit"></i> دستورات</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user )


                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td> {{ $user->name }}</td>
                                        <td class="hidden-phone"> {{ $user->email }}</td>
                                        <td>کابر عادی</td>
                                     
                                        <td><span class="label label-info label-mini">فعال</span></td>
                                        <td>
                                            <a href="{{ route('users.edit' , $user->id) }}"><button class="btn btn-primary btn-xs">ویرایش<i class="icon-pencil"></i></button></a>
                                            <button class="btn btn-danger btn-xs" onclick="destroyUser(event, {{ $user->id }})">حذف<i class="icon-trash "></i></button>
                                                  <a href="{{ route('users.destroy', $user->id) }}" onclick="destroyUser(event, {{ $user->id }})" class="item-delete mlg-15" title="حذف"></a>
                                        </td>
                                        <td>

                                            <form action="{{ route('users.destroy', $user->id) }}" method="post" id="destroy-user-{{ $user->id }}">
                                              @csrf
                                              @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </section>
                </section>
            </section>

            <script>
                function destroyUser(event, id) {
                  event.preventDefault();
                  Swal.fire({
                  title: 'ایا مطمئن هستید این کار را میخواهید حذف کنید؟',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: 'rgb(221, 51, 51)',
                  cancelButtonColor: 'rgb(48, 133, 214)',
                  confirmButtonText: 'بله حذف کن!',
                  cancelButtonText: 'کنسل'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.getElementById(`destroy-user-${id}`).submit()
                  }
                })
                }
              </script>
@endsection
