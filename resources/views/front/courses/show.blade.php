@extends('layouts.frontMasterPage')
@section('content')
    <div class="theme-cyan">
        <section class="content invoice">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>نمایش اطلاعات دوره
{{--                            <small class="text-muted"> خوش آمدید</small>--}}
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i> خانه</a></li>
                            <li class="breadcrumb-item float-right"><a href="javascript:void(0);">دوره های حضوری</a>
                            </li>
                            <li class="breadcrumb-item active float-right">نمایش دوره</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong> نمایش دوره:{{$course->title}} </p> </strong>
                                </h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li role="presentation" class="divider"></li>
                                            <li><a href="javascript:void(0);">خروجی XLS</a></li>
                                            <li><a href="javascript:void(0);">خروجی CSV</a></li>
                                            <li><a href="javascript:void(0);">خروجی XML</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <h3 class="m-b-0">امتیاز دوره:<strong class="text-primary">{{$course->rate}}</strong>
                                </h3>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab"
                                                                        href="#details" aria-expanded="true">جزئیات</a>
                                    </li>
                                    <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#notes"
                                                                        aria-expanded="false">یادداشت</a></li>
                                    <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab"
                                                                        href="#history"
                                                                        aria-expanded="false">تاریخچه</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                <div class="card" id="details">
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <td width="30%" class="font-weight-bold"> نام دوره:</td>
                                                        <td>{{$course->title}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">نام تخصصی دوره:</td>
                                                        <td>{{$course->slug}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">نوع دوره:</td>
                                                        <td>{{__('custom.'.$course->type)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">تاریخ برگزاری دوره:</td>
                                                        <td>
                                                            {{ Morilog\Jalali\Jalalian::forge($course->start_at)->format('Y/m/d') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">مدرس دوره:</td>
                                                        <td>{{$course->teacher->fullName}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">توضیحات:</td>
                                                        <td>{{$course->description}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="hidden-print col-md-12 text-left">
                                                <a href="javascript:void(0);" class="btn btn-info btn-round"><i
                                                        class="zmdi zmdi-print"></i></a>
                                                <a href="{{route('admin.courses.edit',$course->id)}}"
                                                   class="btn btn-primary btn-round">ویرایش</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="mx-3 text-center font-weight-bold">نظرات کاربران در رابطه با
                                                    این دوره</h5>
                                            </div>
                                        </div>

                                        @include('front.comments.comment')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
   @include('front.comments.comment-script')
@endsection
