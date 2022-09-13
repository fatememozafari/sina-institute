@extends('admin.layout.masterPage')
@section('content')
<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>لیست پیام ها
                    <small class="text-muted">خوش آمدید</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-left">
                    <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                    <li class="breadcrumb-item float-right"><a href="javascript:void(0);">پیام ها</a></li>
                    <li class="breadcrumb-item active float-right">لیست پیام ها</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="جستجو...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th data-breakpoints="xs">موضوع</th>
                                <th data-breakpoints="xs sm md">پیام</th>
                                <th data-breakpoints="xs sm md">فایل</th>
                                <th data-breakpoints="xs">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contact as $item)
                            <tr>
                                <td>
                                    <div class="">

                                        <label for="delete_2">{{$item->id}}</label>
                                    </div>
                                </td>
                                <td>
{{--                                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar_path}}" class="rounded-circle avatar" alt="">--}}
                                    <p class="c_name">{{$item->name}}</p>
                                </td>
                                <td>
                                    <span>{{$item->title}}</span>
                                </td>
                                <td>
{{--                                    <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-l-5"></i> {{$item->message}}</a></span>--}}
                                </td>
                                <td>
                                    <img src="{{$item->file}}" width="200px"  class="rounded-circle avatar" alt="">

                                </td>
                                <td>
                                    <a href="/admin/contacts/{{$item->id}}" title="ادامه مطلب" class="btn btn-round btn-info"> نمایش پیام </a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-arrow-left"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
