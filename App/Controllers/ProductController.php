<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public function getProducts()
    {
        $viewName = 'product.index';
        $data = [
            'products_array' =>
            [
                [
                    'id' => '1',
                    'name' => 'Iphone 14',
                    'price' => 12000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 100,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ], [
                    'id' => '2',
                    'name' => 'Iphone 15',
                    'price' => 19000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 200,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ], [
                    'id' => '3',
                    'name' => 'Iphone 13',
                    'price' => 10000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 99,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ], [
                    'id' => '4',
                    'name' => 'Iphone 10',
                    'price' => 9000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 119,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ]
            ]
        ];

        return $this->render($viewName, $data);
    }

    public function getProduct($id)
    {
        $viewName = 'product.product_detail';
        $data = [
            [
                'id' => '1',
                'name' => 'Iphone 14',
                'price' => 12000000,
                'color' => 'Màu đỏ',
                'quantity' => 100,
                'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                'description' => 'Mô tả sản phẩm'
            ], [
                'id' => '2',
                'name' => 'Iphone 15',
                'price' => 19000000,
                'color' => 'Màu đỏ',
                'quantity' => 200,
                'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                'description' => 'Mô tả sản phẩm'
            ], [
                'id' => '3',
                'name' => 'Iphone 13',
                'price' => 10000000,
                'color' => 'Màu đỏ',
                'quantity' => 99,
                'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                'description' => 'Mô tả sản phẩm'
            ], [
                'id' => '4',
                'name' => 'Iphone 10',
                'price' => 9000000,
                'color' => 'Màu đỏ',
                'quantity' => 119,
                'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                'description' => 'Mô tả sản phẩm'
            ]
        ];
        foreach ($data as $value) {
            if ($value['id'] == $id) {
                $data = $value;
                break;
            }
        }

        return $this->render($viewName, $data);
    }

    public function createProduct()
    {
        $viewName = 'product.product_create';
        $data = [
            'products_array' =>
            [
                [
                    'id' => '1',
                    'name' => 'Iphone 14',
                    'price' => 12000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 100,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ], [
                    'id' => '2',
                    'name' => 'Iphone 15',
                    'price' => 19000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 200,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ], [
                    'id' => '3',
                    'name' => 'Iphone 13',
                    'price' => 10000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 99,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ], [
                    'id' => '4',
                    'name' => 'Iphone 10',
                    'price' => 9000000,
                    'color' => 'Màu đỏ',
                    'quantity' => 119,
                    'image_url' => 'public/dist/img/iphone-11-trang-1-2-org.jpg',
                    'description' => 'Mô tả sản phẩm'
                ]
            ]
        ];

        return $this->render($viewName, $data);
    }
}
