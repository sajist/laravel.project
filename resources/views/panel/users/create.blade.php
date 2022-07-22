@extends('layouts.panel')

@section('main')
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            {{-- <section class="panel"> --}}
                <header class="panel-heading">
                   فرم اعتبارسنجی ضروری
                </header>
                <div class="panel-body">
                    <div class="form">
                        <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#">
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">نام</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="firstname" name="name" type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="email" class="control-label col-lg-2">ایمیل</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="email" name="email" type="email" required/>
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
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</form>
@endsection