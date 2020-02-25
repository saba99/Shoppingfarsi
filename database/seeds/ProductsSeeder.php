<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id'=>2,
            'title' => 'Samsung Galaxy A9',
            'short_description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'sku' => '784',
            'status' => '1',
            'slug' => 'strawberry',
            'price' => 698.88,
            'discount' => '32',
            'user_id' => '4'
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'title' => 'Samsung Galaxy A+',
            'short_description' => ' Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'sku' => '587',
            'status' => '1',
            'slug' => 'WHITEGROUP',
            'price' => 569.45,
            'discount' => '22',
            'user_id' => '4'
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'title' => 'NOKIA',
            'short_description' => 'FAKE WITH SEEDER',
            'sku' => '9874',
            'status' => '1',
            'slug' => 'golden globe',
            'price' => 4853,
            'discount' => '55',
            'user_id' => '4'
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'title' => 'ANDROID',
            'short_description' => ' DUMMY DATA',
            'sku' => '45875',
            'status' => '1',
            'slug' => 'TAHOMA',
            'price' => 4581,
            'discount' => '12',
            'user_id' => '4'
        ]);
        DB::table('products')->insert([
            'title' => 'Samsung Galaxy S9',
            'short_description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'sku'=>'369',
            'status'=>'1',
            'slug'=>'htc',
            'price' => 698.88,
            'discount'=>'32',
            'user_id'=>'2'
        ]);

        DB::table('products')->insert([
            'title' => 'Apple iPhone X',
            'short_description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
             'sku'=>'147',
            'status'=>'1',
            
            'discount'=>'25',
            'slug'=>'whitecam',
            'user_id'=>'2',
            'price' => 983.00
        ]);

        DB::table('products')->insert([
            'title' => 'Google Pixel 2 XL',
            'short_description' => 'New condition
• No returns, but backed by eBay Money back guarantee',
           
            'price' => 675.00,
            'sku' => '7858',
            'status' => '1',

            'discount' => '25',
            'slug' => 'LG',
            'user_id' => '2',
        ]);

        DB::table('products')->insert([
            'title' => 'LG V10 H900',
            'short_description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            
            'price' => 159.99,
            'sku' => '5896',
            'status' => '0',

            'discount' => '18',
            'slug' => 'apple',
            'user_id' => '1',
        ]);

        DB::table('products')->insert([
            'title' => 'Huawei Elate',
            'short_description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            
            'price' => 68.00,
            'sku' => '4855',
            'status' => '0',

            'discount' => '50',
            'slug' => 'blackberry',
            'user_id' => '2',
        ]);

        DB::table('products')->insert([
            'title' => 'HTC One M10',
            'short_description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            
            'price' => 129.99,
            'sku' => '857',
            'status' => '0',

            'discount' => '25',
            'slug' => 'lenovo',
            'user_id' => '3',
        ]);
    }
}
