<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bão Công Nghệ - Hệ thống quản lý nội bộ</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/tables/footable/footable.min.js"></script>

    <script type="text/javascript" src="../assets/js/core/app.js"></script>
    <script type="text/javascript" src="../assets/js/pages/form_bootstrap_select.js"></script>
    <script type="text/javascript" src="../assets/js/pages/components_modals.js"></script>
    <!-- /theme JS files -->

</head>

<body class="sidebar-xs">

    <!-- Navigation bar -->
   <?php include "../common/navigationBar.php"?>

    <!-- /Navigation bar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">



            <!-- Menu -->
            <?php include "../common/menu.php"?>
            <!-- /Menu -->

            <!-- Left sidebar -->
            <?php include "pageName_leftSideBar.php"?>
            <!-- /Left sidebar -->


            <!-- Main content -->
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
                                            class="text-semibold" id="content">...</span></h4>
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
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Thành phố
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1">TP. HỒ CHÍ MINH</option>
                                                    <option value="2">TP. HÀ NỘI</option>
                                                    <option value="3">TP. HẢI PHÒNG</option>
                                                    <option value="4">TP. ĐÀ NẴNG</option>
                                                    <option value="5">TỈNH HÀ GIANG</option>
                                                    <option value="6">TỈNH CAO BẰNG</option>
                                                    <option value="7">TỈNH LAI CHÂU</option>
                                                    <option value="8">TỈNH TUYÊN QUANG</option>
                                                    <option value="9">TỈNH LẠNG SƠN</option>
                                                    <option value="10">TỈNH BẮC KẠN</option>
                                                    <option value="11">TỈNH THÁI NGUYÊN</option>
                                                    <option value="12">TỈNH YÊN BÁI</option>
                                                    <option value="13">TỈNH SƠN LA</option>
                                                    <option value="14">TỈNH PHÚ THỌ</option>
                                                    <option value="15">TỈNH VĨNH PHÚC</option>
                                                    <option value="16">TỈNH QUẢNG NINH</option>
                                                    <option value="17">TỈNH BẮC GIANG</option>
                                                    <option value="18">TỈNH BẮC NINH</option>
                                                    <option value="19">TỈNH HẢI DƯƠNG</option>
                                                    <option value="20">TỈNH HƯNG YÊN</option>
                                                    <option value="21">TỈNH HÒA BÌNH</option>
                                                    <option value="22">TỈNH HÀ NAM</option>
                                                    <option value="23">TỈNH NAM ĐỊNH</option>
                                                    <option value="24">TỈNH THÁI BÌNH</option>
                                                    <option value="25">TỈNH NINH BÌNH</option>
                                                    <option value="26">TỈNH THANH HÓA</option>
                                                    <option value="27">TỈNH NGHỆ AN</option>
                                                    <option value="28">TỈNH HÀ TĨNH</option>
                                                    <option value="29">TỈNH QUẢNG BÌNH</option>
                                                    <option value="30">TỈNH QUẢNG TRỊ</option>
                                                    <option value="31">TỈNH THỪA THIÊN HUẾ
                                                    </option>
                                                    <option value="32">TỈNH QUẢNG NAM</option>
                                                    <option value="33">TỈNH QUẢNG NGÃI</option>
                                                    <option value="34">TỈNH KONTUM</option>
                                                    <option value="35">TỈNH BÌNH ĐỊNH</option>
                                                    <option value="36">TỈNH GIA LAI</option>
                                                    <option value="37">TỈNH PHÚ YÊN</option>
                                                    <option value="38">TỈNH ĐÂK LĂK</option>
                                                    <option value="39">TỈNH KHÁNH HÒA</option>
                                                    <option value="40">TỈNH LÂM ĐỒNG</option>
                                                    <option value="41">TỈNH BÌNH PHƯỚC</option>
                                                    <option value="42">TỈNH BÌNH DƯƠNG</option>
                                                    <option value="43">TỈNH NINH THUẬN</option>
                                                    <option value="44">TỈNH TÂY NINH</option>
                                                    <option value="45">TỈNH BÌNH THUẬN</option>
                                                    <option value="46">TỈNH ĐỒNG NAI</option>
                                                    <option value="47">TỈNH LONG AN</option>
                                                    <option value="48">TỈNH ĐỒNG THÁP</option>
                                                    <option value="49">TỈNH AN GIANG</option>
                                                    <option value="50">TỈNH BÀ RỊA - VŨNG TÀU
                                                    </option>
                                                    <option value="51">TỈNH TIỀN GIANG</option>
                                                    <option value="52">TỈNH KIÊN GIANG</option>
                                                    <option value="53">TP. CẦN THƠ</option>
                                                    <option value="54">TỈNH BẾN TRE</option>
                                                    <option value="55">TỈNH VĨNH LONG</option>
                                                    <option value="56">TỈNH TRÀ VINH</option>
                                                    <option value="57">TỈNH SÓC TRĂNG</option>
                                                    <option value="58">TỈNH BẠC LIÊU</option>
                                                    <option value="59">TỈNH CÀ MAU</option>
                                                    <option value="60">TỈNH ĐIỆN BIÊN</option>
                                                    <option value="61">TỈNH ĐĂK NÔNG</option>
                                                    <option value="62">TỈNH HẬU GIANG</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>Quận huyện
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1">Quận 1</option>
                                                    <option value="2">Quận 2</option>
                                                    <option value="3">Quận 3</option>
                                                    <option value="4">Quận 4</option>
                                                    <option value="5">Quận 5</option>
                                                    <option value="6">Quận 6</option>
                                                    <option value="7">Quận 7</option>
                                                    <option value="8">Quận 8</option>
                                                    <option value="9">Quận 9</option>
                                                    <option value="10">Quận 10</option>
                                                    <option value="11">Quận 11</option>
                                                    <option value="12">Quận 12</option>
                                                    <option value="13">Quận Gò Vấp</option>
                                                    <option value="14">Quận Tân Bình</option>
                                                    <option value="15">Quận Tân Phú</option>
                                                    <option value="16">Quận Bình Thạnh</option>
                                                    <option value="17">Quận Phú Nhuận</option>
                                                    <option value="18">Quận Thủ Đức</option>
                                                    <option value="19">Quận Bình Tân</option>
                                                    <option value="20">Huyện Bình Chánh</option>
                                                    <option value="21">Huyện Củ Chi</option>
                                                    <option value="22">Huyện Hóc Môn</option>
                                                    <option value="23">Huyện Nhà Bè</option>
                                                    <option value="24">Huyện Cần Giờ</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Phường xã
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1">Phường Tân Định</option>
                                                    <option value="2">Phường Đa Kao</option>
                                                    <option value="3">Phường Bến Nghé</option>
                                                    <option value="4">Phường Bến Thành</option>
                                                    <option value="5">Phường Cầu Ông Lãnh
                                                    </option>
                                                    <option value="6">Phường Nguyễn Cư Trinh
                                                    </option>
                                                    <option value="7">Phường Nguyễn Thái Bình
                                                    </option>
                                                    <option value="8">Phường Phạm Ngũ Lão
                                                    </option>
                                                    <option value="9">Phường Cầu Kho</option>
                                                    <option value="10">Phường Cô Giang</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Loại tổ chức
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1" selected="selected">Trường học</option>
                                                    <option value="2">Sở giáo dục</option>
                                                    <option value="3">Phòng giáo dục</option>
                                                    <option value="4">Bộ giáo dục</option>
                                                    <option value="5">Công ty</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Hình thức tổ chức
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1">Công lập</option>
                                                    <option value="2">Tư thục</option>
                                                    <option value="3">Dân lập</option>
                                                    <option value="4">Bán công</option>
                                                    <option value="5">Quốc tế</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Qui mô tổ chức
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1">Nhà trẻ</option>
                                                    <option value="2">Mẫu giáo</option>
                                                    <option value="3">Mầm non</option>
                                                    <option value="4">Nhóm trẻ</option>
                                                    <option value="5">Lớp mẫu giáo</option>
                                                    <option value="6">Nhóm lớp mầm non</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Tổ chức
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1" selected="selected">MNCL Nguyễn Cư Trinh</option>
                                                    <option value="2">MNCL Lê Thị Riêng</option>
                                                    <option value="3">MNCL Hoa Quỳnh</option>
                                                    <option value="4">Bộ giáo dục</option>
                                                    <option value="5">MNCL Tân Định</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Mã đơn hàng
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1" selected="selected">SO-BCN-190729-1007-EPKA
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Phân hệ
                                                </label>
                                                <select class="bootstrap-select" data-width="100%">
                                                    <option value="1" selected="selected">Khẩu phần dinh dưỡng</option>
                                                    <option value="2">Quản lý thu chi</option>
                                                    <option value="3">Theo dõi sức khỏe</option>
                                                    <option value="4">Báo cáo thống kê</option>
                                                    <option value="5">Kế hoạch giáo dục</option>
                                                    <option value="6">Ứng dụng SCFamily</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Từ ngày
                                                </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control daterange-single"
                                                        value="24/09/2019">
                                                    <span class="input-group-addon"><i
                                                            class="icon-calendar22"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label>
                                                    Đến ngày
                                                </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control daterange-single"
                                                        value="24/09/2020">
                                                    <span class="input-group-addon"><i
                                                            class="icon-calendar22"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    Ghi chú
                                                </label>
                                                <textarea type="textarea" class="form-control" rows="5"
                                                    aria-placeholder="Hiển thị nội dung hoạt động giáo dục được chọn">
														</textarea>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <div class="modal-footer bg-gray">
                                    <button type="button"
                                        class="btn btn-xs btn-primary bg-primary-800 btn-labeled"><b><i
                                                class="icon-floppy-disk"></i></b> Lưu</button>
                                    <button type="button" class="btn btn-xs btn-labeled" data-dismiss="modal"><b><i
                                                class="glyphicon glyphicon-off"></i></b> Thoát</button>
                                </div>
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
                                            <th class="text-center">Phân hệ</th>
                                            <th class="text-center" data-hide="phone" style="width:10%">Ngày gia hạn
                                            </th>
                                            <th class="text-center" style="width:10%">Ngày hết hạn</th>
                                            <th class="text-center" style="width:10%">Tình trạng</th>
                                            <th class="text-center" style="width:5%">Hành động</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">26/09/2018 09:00</td>
                                            <td data-label="Tên tổ chức">MNCL Nguyễn Cư Trinh</td>
                                            <td data-label="Mã đơn hàng">SO-BCN-190729-1007-EPKA</td>
                                            <td data-label="PHân hệ">Ứng dụng SCFamily</td>
                                            <td class="text-center" data-label="Ngày gia hạn">24/09/2019</td>
                                            <td class="text-center" data-label="Ngày hết hạn">24/09/2020</td>
                                            <td data-label="Tình trạng">
                                                <span class="label label-success"><i class="icon-checkmark4"></i> Đang
                                                    sử dụng</span>
                                            </td>
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
                                                            <li><a href="#"><i class="glyphicon glyphicon-remove"></i>
                                                                    Hủy bỏ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">24/09/2018 09:00</td>
                                            <td data-label="Tên tổ chức">MNCL Lê Thị Riêng</td>
                                            <td data-label="Mã đơn hàng">SO-BCN-190729-1007-EPKA</td>
                                            <td data-label="Phân hệ">Quản lý thu chi</td>
                                            <td class="text-center" data-label="Ngày gia hạn">24/09/2018</td>
                                            <td class="text-center" data-label="Ngày hết hạn">24/09/2019</td>
                                            <td data-label="Tình trạng">
                                                <span class="label bg-orange"><i class="icon-battery-charging"></i> Sắp
                                                    hết hạn</span>
                                            </td>
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
                                                            <li><a href="#"><i class="glyphicon glyphicon-remove"></i>
                                                                    Hủy bỏ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">24/09/2018 09:00</td>
                                            <td data-label="Tên tổ chức">MNCL Lê Thị Riêng</td>
                                            <td data-label="Mã đơn hàng">SO-BCN-190729-1007-EPKA</td>
                                            <td data-label="Phân hệ">Khẩu phần dinh dưỡng</td>
                                            <td class="text-center" data-label="Ngày gia hạn">24/09/2018</td>
                                            <td class="text-center" data-label="Ngày hết hạn">24/09/2019</td>
                                            <td data-label="Tình trạng">
                                                <span class="label bg-orange"><i class="icon-battery-charging"></i> Sắp
                                                    hết hạn</span>
                                            </td>
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
                                                            <li><a href="#"><i class="glyphicon glyphicon-remove"></i>
                                                                    Hủy bỏ</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /basic panel controls -->
                        </div>
                    </div>
                    <!-- /Main content -->




                    <!-- Footer -->
                    <?php include "../common/pageFooter.php"?>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /Main content -->


			<!-- Right sidebar -->
			<?php include "pageName_rightSideBar.php"?>
			<!-- /Right sidebar -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <script>
    var ops = {
        'html': true,
        content: function() {
            return $('#module-sc').html();
        }
    };

    $('#link-module-sc').popover(ops);
    $(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });

    // Switchery
    // ------------------------------

    // Initialize multiple switches
    if (Array.prototype.forEach) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    } else {
        var elems = document.querySelectorAll('.switchery');
        for (var i = 0; i < elems.length; i++) {
            var switchery = new Switchery(elems[i]);
        }
    }

    // Initialize responsive functionality
    $('.table-togglable').footable();
    </script>
</body>

</html>