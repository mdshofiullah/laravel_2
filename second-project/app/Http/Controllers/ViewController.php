<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city ;
    private $mobile;
    private $data = [];
    private $data1 = [];
    private $products;

    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->mobile = '123456879';
        $this->data = [10,20,1,'shofi',0.3,true];
        $this->data1 = [
            0 => [
                'name'      => 'shofi',
                'city'      => 'Dhaka',
                'mobile'    => '123456',
            ],
            1 => [
                'name'      => 'Nuru',
                'city'      => 'feni',
                'mobile'    => '65489794',
            ],
            3 => [
                'name'      => 'rafiq',
                'city'      => 'Borishal',
                'mobile'    => '+ 646876',
            ],
        ];

        return view('bitm',[
            'a'         => $this->city,
            'shofi'     => $this->mobile,
            'anything'  => $this->data,
            'twoDArray'   => $this->data1,
        ]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();


        return view('about',['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($idanythingagain)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $idanythingagain)
            {
                return view('detail', ['dataanything' => $item]);
            }
        }
    }
}
