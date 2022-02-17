<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id'        => 1,
            'name'          => 'T-shirt',
            'price'         => '2850',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
              'image'       => asset('/img/p10.jpg'),
            ],
            1 => [
                'id'            => 2,
                'name'          => 'Smart Watch',
                'price'         => '3850',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'image'         => asset('/img/p3.jpg'),
            ],
            2 => [
                'id'            => 3,
                'name'          => 'New Shirt',
                'price'         => '1500',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'image'         => asset('/img/p12.jpg'),
            ],
            3 => [
                'id'            => 4,
                'name'          => 'New T-Shirt',
                'price'         => '1200',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'image'         => asset('/img/p9.jpg'),
            ],
            4 => [
                'id'            => 5,
                'name'          => 'New T-Shirt',
                'price'         => '1250',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'image'         => asset('/img/p11.png'),
            ],
            5 => [
                'id'            => 6,
                'name'          => 'Sunglasses',
                'price'         => '1200',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'image'         => asset('/img/p4.jpg'),
            ],
        ];
    }
}
