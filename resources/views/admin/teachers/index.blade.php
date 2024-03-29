@extends('layouts.adminMasterPage')
@section('content')
    <div class="theme-cyan">
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>
{{--                            <small class="text-muted">خوش امدید</small>--}}
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10"
                                type="button">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                        <ul class="breadcrumb float-md-left">
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right">لیست مدرسان</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            @include('alert')
            <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2> <strong>لیست مدرسان</strong></h2>
                                <ul class="header-dropdown">
                                    <li class="">
                                        <a class="btn btn-info" href="{{route('admin.teachers.create')}}">ایجاد مدرس جدید</a>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <table
                                        class="table table-bordered table-striped table-hover dataTable js-exportable"
                                        id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                        <tr role="row">

                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="ردیف : activate to sort column ascending"
                                                style="width: 20.5625px;">ردیف
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="نام و نام خانوادگی: activate to sort column ascending"
                                                style="width: 133.453px;">نام و نام خانوادگی
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" تخصصص : activate to sort column ascending"
                                                style="width:44.3906px;"> تخصصص
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" شماره موبایل : activate to sort column ascending"
                                                style="width: 106.828px;">شماره موبایل
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="ایمیل: activate to sort column ascending"
                                                style="width: 125.062px;">ایمیل
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="عملیات: activate to sort column ascending"
                                                style="width: 233.453px;">عملیات
                                            </th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ردیف</th>
                                            <th rowspan="1" colspan="1"> نام و نام خانوادگی</th>
                                            <th rowspan="1" colspan="1"> تخصصص</th>
                                            <th rowspan="1" colspan="1">شماره موبایل</th>
                                            <th rowspan="1" colspan="1">ایمیل</th>
                                            <th rowspan="1" colspan="1">عملیات</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($teacher as $item)
                                            <tr role="row" class="even">
                                                <td class="sorting_1">{{$item->id}}</td>
                                                <td>{{$item->fullName}}</td>
                                                <td>{{$item->job}}</td>
                                                <td>{{$item->mobile}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('admin.teachers.show',$item->id)}}" class="btn-sm text-info mt-3">نمایش
                                                        </a>
                                                        <a href="{{route('admin.teachers.edit',$item->id)}}" class="btn-sm text-info mt-3">ویرایش
                                                        </a>
                                                        @role('SUPERADMIN')
                                                        <form action="{{route('admin.teachers.delete',$item->id)}}" class="mt-2" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-round btn-simple">
                                                                حذف
                                                            </button>
                                                        </form>
                                                            @endrole
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

        </section>
    </div>

@endsection
