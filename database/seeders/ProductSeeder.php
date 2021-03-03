<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([[
            'name'=>'VIVO mobile',
            'price'=>'250',
            'category'=>'mobile',
            'description'=>'A smartphone with 8gb ram such more features',
            'gallery'=>'https://static.toiimg.com/photo/73078527.cms'],
        
            [
                'name'=>'ONE PLUS mobile',
                'price'=>'400',
                'category'=>'mobile',
                'description'=>'A smartphone with 12gb ram such more features',
                'gallery'=>'https://static.digit.in/product/1a2ed0b150e41a41e20d24cbce5b7b2f06c91018.jpeg?tr=w-1200'],

                [
                    'name'=>'MI TV',
                    'price'=>'300',
                    'category'=>'TV',
                    'description'=>'32" Screen and such more features',
                    'gallery'=>'https://images.indianexpress.com/2019/10/Mi-TV_BIG_LEAD.jpg'],

                    [
                        'name'=>'Samsung TV',
                        'price'=>'350',
                        'category'=>'TV',
                        'description'=>'A 42" Screen and such more features',
                        'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuTbkfWvoqWbuTSLTc9CiJ2Pr9wouiDB2NdQ&usqp=CAU'],

                        [
                            'name'=>'LG FRIDGE',
                            'price'=>'400',
                            'category'=>'FRIDGE',
                            'description'=>'782LT Storage and such more features',
                            'gallery'=>'https://5.imimg.com/data5/PR/TE/MY-7846959/635l-french-door-fridge-freezer-500x500.png'],

                            [
                                'name'=>'SAMSUNG FRIDGE',
                                'price'=>'500',
                                'category'=>'FRIDGE',
                                'description'=>'900LT Storage and such more features',
                                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71O31clz6mL._SX679_.jpg'],

                                [
                                    'name'=>'DELL LAPTOPS',
                                    'price'=>'400',
                                    'category'=>'LAPTOPS',
                                    'description'=>'A Laptop with and 1tb hard disk 4gb ram such more features',
                                    'gallery'=>'https://cdn.mos.cms.futurecdn.net/vEcELHdn998wRTcCzqV5m9.jpg'],

                                    [
                                        'name'=>'LENOVO LAPTOPS',
                                        'price'=>'500',
                                        'category'=>'LAPTOPS',
                                        'description'=>'A Laptop with and 1tb hard disk 8gb ram such more features',
                                        'gallery'=>'https://cdn.mos.cms.futurecdn.net/A4GDK27VMnz6LtFDy9yzk.jpg'],


                                        [
                                            'name'=>'LG WASHING MECHINE',
                                            'price'=>'400',
                                            'category'=>'WASHING MECHINE',
                                            'description'=>'600LT Storage capacity such more features',
                                            'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/0/08/LGwashingmachine.jpg'],

                                            [
                                                'name'=>'SAMSUNG',
                                                'price'=>'500',
                                                'category'=>'WASHING MECHINE',
                                                'description'=>'800LT Storage capacity such more features',
                                                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/61e7JqQ%2BSwL._SL1500_.jpg']

            
        
        ]);
    }
}
