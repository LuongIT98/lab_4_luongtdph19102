<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'DANH SÁCH SẢN PHẨM')
@section('content')
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%"> #</th>
                    <th style="width: 20%">Tên sản phẩm</th>
                    <th style="width: 15%">Gía</th>
                    <th style="width: 14%">Màu sắc</th>
                    <th style="width: 10%">Số lượng</th>
                    <th style="width: 20%">Hình ảnh</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products_array as $item)
                <tr>
                    <td>#</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }} Vnd</td>
                    <td>{{ $item['color'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>
                        <img src="{{ $item['image_url'] }}" alt="Hình ảnh" width="60" height="60">
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="index?url=product-detail/{{ $item['id'] }}">
                            <i class="fas fa-folder">
                            </i>
                            Chi tiết
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Sửa
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Xóa
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    <a href="index?url=product-create"><button class="btn btn-success">Thêm mới sản phẩm</button></a>

@endsection
