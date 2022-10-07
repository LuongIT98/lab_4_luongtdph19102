<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Thêm mới sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'THÊM MỚI SẢN PHẨM')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tên sản phẩm</label>
                                <input type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Mô tả sản phẩm</label>
                                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputFile">Hình ảnh</label>
                                <input type="file" id="inputFile" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputCategories">Loại hàng</label>
                                <select id="inputCategories" class="form-control custom-select">
                                    <option selected disabled>Chọn một</option>
                                    <option>Quần</option>
                                    <option>Áo</option>
                                    <option>Mữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Trạng thái sản phẩm</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Chọn một</option>
                                    <option>Còn bán</option>
                                    <option>Không bán</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="row">
                            <div class="col-12">
                                <a href="index?url=products" class="btn btn-secondary">Quay lại danh sách sản phẩm</a>
                                <input type="submit" value="Create new Project" class="btn btn-success float-right">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
@endsection
