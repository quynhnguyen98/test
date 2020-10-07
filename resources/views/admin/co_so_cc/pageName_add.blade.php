
@extends('admin.co_so_cc.pageName_list')
@section('content')
<div class="modal fade" id="modal_add_content">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary-800">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Bản quyền phần mềm</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>
                                    Ten Co So
                                </label>
                                <input type="text" name="ten" id="">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>
                                    SDT
                                </label>
                                <input type="text" name="sdt" id="">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>
                                    Dia Chi
                                </label>
                                <input type="text" name="dia_chi" id="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-gray">
                    <button type="button"
                            class="btn btn-xs btn-primary bg-primary-800 btn-labeled"><b><i
                                class="icon-floppy-disk"></i></b> Lưu</button>
                    <button type="button" class="btn btn-xs btn-labeled" data-dismiss="modal"><b><i
                                class="glyphicon glyphicon-off"></i></b> Thoát</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->


</div>
