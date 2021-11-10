<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        return view('product_page');
    }

    public function display()
    {
        return view('product/product_display');
    }

    public function page()
    {
       
        echo view('partial/content');
        
    }


    public function catalog()
    {
        echo view('partial/header');
        $data=[
                'title'=>'Data Catalog',
                'brand'=>'Xiaomi',
                'product'=>[
                    'Redmi Note 2',
                    'Redmi Note 5',
                    'Redmi Note 9',
                    'Redmi Note 10',
                    'Redmi Note 11',
                    'Redmi TV',
                ],
        ];
        
        return view('partial/content',$data);

        echo view('partial/footer');
    }

}
