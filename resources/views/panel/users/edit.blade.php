@extends('layouts.panel')

@section('main')
<form method="POST" action="{{ route('users.update' , $user->id) }} " >
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-lg-12">
            {{-- <section class="panel"> --}}
                <header class="panel-heading">
                   فرم اعتبارسنجی ضروری
                </header>
                <div class="panel-body">
                    <div class="form">
                    
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">نام</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" name="name" value="{{ $user->name }}" type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">نام خانوادگی</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" name="lastname" value="{{ $user->lastname }}" type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="lastname" class="control-label col-lg-2">شهر </label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="lastname" name="city" value="{{ $user->city }}" type="text" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">شماره موبایل</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="username" value="{{ $user->phone }}" name="phone" type="number" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">ایمیل</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="email" value="{{ $user->email }}" name="email" type="email" required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">کلمه عبور</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="password" name="password" type="password" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="confirm_password" class="control-label col-lg-2">تایید کلمه عبور</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="confirm_password" name="password_confirmation" type="password" required/>
                                </div>
                            </div>       

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-danger" type="submit">ارسال</button>
                            
                                </div>
                            </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</form>
@endsection