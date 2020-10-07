@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- page header -->
    <div class="breadcrumb">
        <div class="pull-right">
            <ol class="breadcrumb" style="height:100%;">
                <li><a href="#">HỆ THỐNG QUẢN LÝ NỘI BỘ</a></li>
                <li><a href="#">Danh sách bản quyền</a></li>
                &nbsp;
            </ol>
        </div>

        <h4>
            &nbsp;Bản quyền phần mềm &nbsp;
            <small>Danh sách bản quyền</small>
        </h4>
    </div>
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">

                <div class="row">
                    <div class="col-sm-4">
                        <h2><i class="icon-arrow-left52 position-left font-size-100"></i> <span
                                class="text-semibold" id="content">...</span></h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="btn-group">
                            <button class="btn btn-primary btn-sm" type="button">Show Data</button>
                            <button class="btn btn-primary btn-sm" type="button">Export</button>
                            <button class="btn btn-primary btn-sm" type="button">Print</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary btn-sm" type="button">Show Data</button>
                            <button class="btn btn-primary btn-sm" type="button">Export</button>
                        </div>
                    </div>
                </div>

                <!-- <button class="btn btn-primary pull-right btn-sm"  type="button">Cancel</button> -->
            </div>

        </div>
    </div>
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h5><span class="text-semibold">Thong bao</span></h5>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- modal_add_content -->
        <div class="modal fade" id="modal_add_content">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary-800">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Bản quyền phần mềm</h4>
                    </div>
                    <form action="{{empty($id)?route('admin.save'):route('admin.update',$id)}}" method="post">
                        @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>
                                        Ten Co So
                                    </label>
                                    <input type="text" name="ten" id="" value="{{isset($data->ten)?$data->ten:old('ten')}}">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>
                                        SDT
                                    </label>
                                    <input type="text" name="sdt" id="" value="{{isset($data->sdt)?$data->sdt:old('sdt')}}">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>
                                        Dia Chi
                                    </label>
                                    <input type="text" name="dia_chi" id="" value="{{isset($data->dia_chi)?$data->dia_chi:old('dia_chi')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-gray">
{{--                        <b><i class="icon-floppy-disk"></i></b>--}}
                        <input type="submit" class="btn btn-xs btn-primary bg-primary-800 btn-labeled" value="Lưu" >
                        <button type="button" class="btn btn-xs btn-labeled" data-dismiss="modal"><b><i
                                    class="glyphicon glyphicon-off"></i></b> Thoát</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->


        </div>
        <!-- /modal_add_content -->

        <!-- Filter -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-flat border-left-lg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group">
                                    <label>Từ ngày
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control daterange-single"
                                               value="01/09/2019">
                                        <span class="input-group-addon"><i
                                                class="icon-calendar22"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group">
                                    <label>Đến ngày
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control daterange-single"
                                               value="30/09/2019">
                                        <span class="input-group-addon"><i
                                                class="icon-calendar22"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Các nút lệnh
                                    </label>
                                    <div class="no-margin">
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary"
                                                        data-popup="tooltip" data-placement="top"
                                                        data-original-title="Thực hiện lọc"><i
                                                        class="glyphicon glyphicon-search"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary"
                                                        data-popup="tooltip" data-placement="top"
                                                        data-original-title="Thêm" data-toggle="modal"
                                                        data-target="#modal_add_content"><i
                                                        class="glyphicon glyphicon-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Filter -->

        <!-- Main content -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic panel controls -->
                <div class="panel panel-white border-top-lg border-top-primary-800">
                    <table class="table table-togglable table-hover table-bordered table-striped">
                        <thead class="grey-light">
                        <tr>
                            <th class="text-center" style="width:100px">Ngày tạo</th>
                            <th class="text-center" data-toggle="true">Tên tổ chức</th>
                            <th class="text-center" data-hide="phone">Mã đơn hàng</th>

                            <th class="text-center" style="width:5%">Hành động</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td class="text-center" name="sdt">{{$item->sdt}}</td>
                            <td data-label="Tên tổ chức" name="ten">{{$item->ten}}</td>
                            <td data-label="Mã đơn hàng" name="dia_chi">{{$item->dia_chi}}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" data-toggle="modal"
                                                   data-target="#modal_add_content"><i
                                                        class="icon-pencil7"></i> Chỉnh sửa</a></li>
                                            <li><a href="{{route('admin.delete',$item->id)}}"><i class="glyphicon glyphicon-remove"></i>
                                                    Hủy bỏ</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /basic panel controls -->
            </div>
        </div>
        <!-- /Main content -->




        <!-- Footer -->
{{--<!--    --><?php //include "../common/pageFooter.php"?>--}}
        @include('../admin.pageFooter');
    <!-- /footer -->

    </div>
    <!-- /content area -->

</div>
@endsection
