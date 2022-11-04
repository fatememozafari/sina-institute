@extends('admin.layout.masterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ثبت دوره غیرحضوری جدید
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ثبت دوره غیرحضوری جدید </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>  <strong></strong> <small></small> </h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/admin/offline-courses" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>شناسه دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="id_code" class="form-control" placeholder="شناسه دوره"
                                               @error('id_code')
                                               style="border: 1px solid red"
                                            @enderror>
                                        @error('id_code')
                                        <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">

                                <div class="col-sm-12"><b>عنوان دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="عنوان دوره"
                                               @error('title')
                                               style="border: 1px solid red"
                                            @enderror>
                                        @error('title')
                                        <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>عنوان تخصصی دوره</b>
                                    <div class="form-group">
                                        <input type="text" name="slug" class="form-control" placeholder="عنوان تخصصی دوره"
                                               @error('slug')
                                               style="border: 1px solid red"
                                            @enderror>
                                        @error('slug')
                                        <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>نام مدرس</b>
                                        <select class="form-control show-tick" name="teacher_id"
                                                @error('teacher_id')
                                                style="border: 1px solid red"
                                            @enderror>
                                           @foreach($teacher as $item)
                                            <option value="{{$item->id}}">{{$item->id}} {{$item->name}} {{$item->family}}</option>
                                            @endforeach
                                        </select>
                                    @error('teacher_id')
                                    <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>تاریخ برگزاری</b>
                                        <div class="form-group">
                                            <input type="date" name="start_at" class="form-control" placeholder="تاریخ برگزاری"
                                                   @error('start_at')
                                                   style="border: 1px solid red"
                                                @enderror>
                                            @error('start_at')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-sm-12"><b>نوع فایل</b>
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="file_type"
                                                    @error('file_type')
                                                    style="border: 1px solid red"
                                                @enderror>
                                                <option value="">- نوع فایل -</option>
                                                <option> یک مورد را انتخاب کنید </option>
                                                <option value="pdf">pdf</option>
                                                <option value="video">video</option>
                                                <option value="voice">voice</option>
                                            </select>
                                            @error('file_type')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12"><b>فایل دوره</b>
                                        <div class="form-group">
                                            <input type="file" name="file" class="form-control" placeholder="فایل دوره"
                                                   @error('file')
                                                   style="border: 1px solid red"
                                                @enderror>
                                            @error('file')
                                            <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            <div class="row clearfix">

                                <div class="col-sm-12"><b>نوع دوره</b>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="type"
                                                @error('type')
                                                style="border: 1px solid red"
                                            @enderror>
                                            <option value="">- نوع دوره -</option>
                                            <option> یک مورد را انتخاب کنید </option>
                                            <option value="SPECIALISED">تخصصی</option>
                                            <option value="SEMI_SPECIALISED">نیمه تخصصی</option>
                                            <option value="GENERAL">عمومی</option>
                                        </select>
                                        @error('type')
                                        <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12"><b>توضیحات</b>
                                <div class="form-group">
                                    <textarea rows="4" name="description" class="form-control no-resize" placeholder="لطفاً آنچه را می خواهید تایپ کنید ..."
                                              @error('description')
                                              style="border: 1px solid red"
                                            @enderror></textarea>
                                    @error('description')
                                    <span style="font-size: 12px;font-weight: bold;color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                <button type="reset" class="btn btn-default btn-round btn-simple">لغو</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
