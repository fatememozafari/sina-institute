@extends('layouts.adminMasterPage')
@section('content')
    <div class="theme-cyan">
    <section class="content invoice">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>نمایش اطلاعات دوره
{{--                        <small class="text-muted"> خوش آمدید</small>--}}
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                    class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">دوره های غیرحضوری</a></li>
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
                            <h2><strong> نمایش دوره{{$course->title}} <p>#{{$course->id}}</p> </strong>
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
                            <h3 class="m-b-0">امتیاز دوره:<strong class="text-primary">{{$course->rate}}</strong></h3>
                            <ul class="nav nav-tabs">
                                <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab"
                                                                    href="#details" aria-expanded="true">جزئیات</a></li>
                                <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#notes"
                                                                    aria-expanded="false">یادداشت</a></li>
                                <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history"
                                                                    aria-expanded="false">تاریخچه</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                            <div class="card" id="details">
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="{{$course->file }}"> <img src="{{$course->file }}" alt="{{$course->title}}" height="300px" width="500px"></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> نام دوره: </h5>
                                                    <p class="text-justify">{{$course->title}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> نام تخصصی دوره: </h5>
                                                    <p class="text-justify">{{$course->slug}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> شناسه دوره: </h5>
                                                    <p class="text-justify">{{$course->id_code}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> نوع دوره: </h5>
                                                    <p class="text-justify">{{__('custom.'.$course->type)}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> تاریخ برگزاری دوره: </h5>
                                                    <p class="text-justify">
                                                        {{ Morilog\Jalali\Jalalian::forge($course->start_at)->format('Y/m/d H:i:s') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> مدرس دوره: </h5>
                                                    <p class="text-justify">{{$course->teacher_id}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> توضیحات: </h5>
                                                    <p class="text-justify">{{$course->description}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    <hr>
                                    <div class="hidden-print col-md-12 text-left">
                                        <a href="javascript:void(0);" class="btn btn-info btn-round"><i
                                                class="zmdi zmdi-print"></i></a>
                                        <a href="{{route('admin.offline-courses.edit',$course->id)}}" class="btn btn-primary btn-round">ویرایش</a>
                                    </div>
                                </div>
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
