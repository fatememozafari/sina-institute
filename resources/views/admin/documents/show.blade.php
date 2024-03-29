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
                            <li class="breadcrumb-item active float-right">لیست دوره های گذرانده شده</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>دوره های گذرانده شده </strong></h2>
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
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <table
                                        class="table table-bordered table-striped table-hover dataTable js-exportable"
                                        id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 44.062px;">ردیف
                                            </th>
                                            <th class="" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 166.453px;"> عنوان دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 98.7031px;">عنوان تخصصی دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 133.7031px;"> نوع دوره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 125.062px;">مدت زمان دوره
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                style="width: 233.453px;">تصویر مدرک
                                            </th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1"> ردیف</th>
                                            <th rowspan="1" colspan="1"> عنوان دوره</th>
                                            <th rowspan="1" colspan="1">عنوان تخصصی دوره</th>
                                            <th rowspan="1" colspan="1"> نوع دوره</th>
                                            <th rowspan="1" colspan="1">مدت زمان دوره</th>
                                            <th rowspan="1" colspan="1">تصویر مدرک</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($document as $item)
                                            <tr role="row" class="even">
                                                <td>{{$item->id}}</td>
                                                <td class="sorting_1">{{$item->title}}</td>
                                                <td>{{$item->slug}}</td>
                                                <td>{{__('custom.'.$item->type)}}</td>
                                                <td>{{$item->duration}} ساعت </td>
                                                <td>
                                                    <div>
                                                        <div class="col-md-12">
                                                            <img src="{{asset('/uploads/documents/'.$item->file)}}" class="img-responsive"
                                                                 style="max-width: 100px; max-height: 100px" alt="">
                                                        </div>
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
