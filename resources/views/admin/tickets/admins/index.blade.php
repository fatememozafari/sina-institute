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
                            <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                        class="zmdi zmdi-home"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active float-right"> ادمین تیکت  </li>
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
                                <h2><strong>ادمین های تیکت </strong></h2>
                                <ul class="header-dropdown">
                                    <li class="">
{{--                                        <a class="btn btn-info" href="{{route('admin.tickets.admins.create')}}">ایجاد دسته بندی جدید</a>--}}
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
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label=" ردیف : activate to sort column ascending"
                                                style="width: 44.3906px;"> ردیف
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="نام دسته بندی: activate to sort column descending"
                                                style="width: 133.453px;">نام ادمین
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="نام دسته بندی: activate to sort column descending"
                                                style="width: 133.453px;">ایمیل ادمین
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="عملیات: activate to sort column ascending"
                                                style="width: 233.453px;">عملیات
                                            </th>

                                        </tr>
                                        </thead>
{{--                                        <tfoot>--}}
{{--                                        <tr>--}}
{{--                                            <th rowspan="1" colspan="1">ردیف</th>--}}
{{--                                            <th rowspan="1" colspan="1">نام دوره</th>--}}
{{--                                            <th rowspan="1" colspan="1"> نام تخصصی دوره</th>--}}
{{--                                            <th rowspan="1" colspan="1">نوع دوره</th>--}}
{{--                                            <th rowspan="1" colspan="1">تاریخ برگزاری</th>--}}
{{--                                            <th rowspan="1" colspan="1">عملیات</th>--}}
{{--                                        </tr>--}}
{{--                                        </tfoot>--}}
                                        <tbody>
                                        @foreach($admins as $key => $admin)
                                            <tr role="row" class="even">
                                                <td>{{ $key += 1 }}</td>
                                                <td>{{ $admin->fullName }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    <div style="display: flex" >
                                                        <a href="{{ route('admin.tickets.admins.set', $admin->id) }}" class="btn btn-{{ $admin->ticketAdmin == null ? 'success' : 'danger' }} btn-sm btn-round"><i class="fa fa-check"></i>
                                                            {{ $admin->ticketAdmin == null ? 'اضافه' : 'حذف' }}
                                                        </a>

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
