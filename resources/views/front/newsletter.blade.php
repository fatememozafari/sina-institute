@extends('layouts.frontMasterPage')

@section('content')
    <section class="content blog-page">

        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>
                        <small> </small>
                    </h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="{{route('front.newsletters.create')}}">خبرنامه</a></li>
                        <li class="breadcrumb-item active float-right">عضویت در خبرنامه</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            @include('alert')
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>عضویت در خبرنامه</strong>
                                 <small>   اخبار ما را زودتر از دیگران دریافت کنید ، بیایید در تماس باشیم. </small>
                            </h2>
                        </div>
                        <div class="body widget newsletter">
                            <form action="{{route('front.newsletters.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    </div>
                                <br>
                                <div class="input-group col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="ایمیل را وارد کنید">
                                    <span class="input-group-addon">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </span>
                                </div>
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-warning btn-round waves-effect m-t-20 mb-2 float-left">ارسال</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
