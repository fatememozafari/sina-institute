@extends('front.layout.masterPage')
@section('content')
    <section class="content blog-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>عضویت در خبرنامه
                        <small> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('front.dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="{{route('front.newsletter.create')}}">خبرنامه</a></li>
                        <li class="breadcrumb-item active float-right">عضویت در خبرنامه</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>خبرنامه <strong>ایمیل</strong> <small>   اخبار ما را زودتر از دیگران دریافت کنید ، بیایید در تماس باشیم. </small></h2>
                        </div>
                        <div class="body widget newsletter">
                            <form action="/newsletter" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="email" class="form-control" placeholder="ایمیل را وارد کنید">
                                    <span class="input-group-addon">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </span>
                                </div>
                                <button type="submit" class="btn btn-warning btn-round waves-effect m-t-20">ارسال</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection