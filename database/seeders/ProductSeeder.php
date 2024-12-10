<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 15 Pro Max',
            'description' => 'Apple iPhone 15 Pro Max with 256GB storage, 6.7-inch OLED display, triple-camera system.',
            'price' => 1499,
            'stock' => 12,
            'image' => 'iphone-15-pro-max.jpg',
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S23 Ultra',
            'description' => 'Samsung Galaxy S23 Ultra with 512GB storage, 6.8-inch Dynamic AMOLED display, quad-camera system.',
            'price' => 1299,
            'stock' => 8,
            'image' => 'samsung-galaxy-s23-ultra.jpg',
        ]);

        Product::create([
            'name' => 'Google Pixel 8 Pro',
            'description' => 'Google Pixel 8 Pro with 256GB storage, 6.7-inch OLED display, triple-camera system.',
            'price' => 999,
            'stock' => 10,
            'image' => 'google-pixel-8-pro.jpg',
        ]);

        Product::create([
            'name' => 'Xiaomi 13 Pro',
            'description' => 'Xiaomi 13 Pro with 512GB storage, 6.73-inch AMOLED display, triple-camera system.',
            'price' => 899.99,
            'stock' => 18,
            'image' => 'xiaomi-13-pro.jpg',
        ]);

        Product::create([
            'name' => 'OnePlus 11',
            'description' => 'OnePlus 11 with 256GB storage, 6.7-inch AMOLED display, triple-camera system.',
            'price' => 749.99,
            'stock' => 15,
            'image' => 'oneplus-11.jpg',
        ]);

        Product::create([
            'name' => 'Oppo Find X6 Pro',
            'description' => 'Oppo Find X6 Pro with 512GB storage, 6.82-inch AMOLED display, triple-camera system.',
            'price' => 1099.99,
            'stock' => 9,
            'image' => 'oppo-find-x6-pro.jpg',
        ]);

        Product::create([
            'name' => 'Vivo X90 Pro',
            'description' => 'Vivo X90 Pro with 512GB storage, 6.78-inch AMOLED display, triple-camera system.',
            'price' => 899.99,
            'stock' => 11,
            'image' => 'vivo-x90-pro.jpg',
        ]);

        Product::create([
            'name' => 'Realme GT Neo 5',
            'description' => 'Realme GT Neo 5 with 512GB storage, 6.74-inch AMOLED display, triple-camera system.',
            'price' => 599.99,
            'stock' => 20,
            'image' => 'realme-gtneo-5.jpg',
        ]);

        Product::create([
            'name' => 'Sony Xperia 1 V',
            'description' => 'Sony Xperia 1 V with 512GB storage, 6.5-inch OLED display, triple-camera system.',
            'price' => 1199.99,
            'stock' => 7,
            'image' => 'sony-xperia-1-v.jpg',
        ]);

        Product::create([
            'name' => 'Huawei P60 Pro',
            'description' => 'Huawei P60 Pro with 512GB storage, 6.67-inch OLED display, triple-camera system.',
            'price' => 1099.99,
            'stock' => 13,
            'image' => 'huawei-p60-pro.jpg',
        ]);

        Product::create([
            'name' => 'Asus ROG Phone 7',
            'description' => 'Asus ROG Phone 7 with 512GB storage, 6.78-inch AMOLED display, triple-camera system.',
            'price' => 999.99,
            'stock' => 10,
            'image' => 'asus-rog-phone-7.jpg',
        ]);

        Product::create([
            'name' => 'Nokia G60',
            'description' => 'Nokia G60 with 128GB storage, 6.58-inch IPS LCD display, triple-camera system.',
            'price' => 299.99,
            'stock' => 25,
            'image' => 'nokia-g60.jpg',
        ]);

        Product::create([
            'name' => 'Motorola Edge 40',
            'description' => 'Motorola Edge 40 with 256GB storage, 6.55-inch pOLED display, dual-camera system.',
            'price' => 599.99,
            'stock' => 17,
            'image' => 'motorola-edge-40.jpg',
        ]);

        Product::create([
            'name' => 'Honor Magic5 Pro',
            'description' => 'Honor Magic5 Pro with 512GB storage, 6.81-inch OLED display, triple-camera system.',
            'price' => 1099.99,
            'stock' => 12,
            'image' => 'honor-magic5-pro.jpg',
        ]);

        Product::create([
            'name' => 'Infinix Zero Ultra',
            'description' => 'Infinix Zero Ultra with 256GB storage, 6.8-inch AMOLED display, triple-camera system.',
            'price' => 499.99,
            'stock' => 22,
            'image' => 'infinix-zero-ultra.jpg',
        ]);

        Product::create([
            'name' => 'Tecno Phantom V Fold',
            'description' => 'Tecno Phantom V Fold with 512GB storage, 7.85-inch AMOLED display, triple-camera system.',
            'price' => 1199.99,
            'stock' => 6,
            'image' => 'tecno-phantom-v-fold.jpg',
        ]);

        Product::create([
            'name' => 'Redmi Note 12 Pro+',
            'description' => 'Redmi Note 12 Pro+ with 256GB storage, 6.67-inch AMOLED display, triple-camera system.',
            'price' => 449.99,
            'stock' => 28,
            'image' => 'redmi-note-12-pro-plus.jpg',
        ]);

        Product::create([
            'name' => 'ZTE Axon 40 Ultra',
            'description' => 'ZTE Axon 40 Ultra with 512GB storage, 6.8-inch AMOLED display, triple-camera system.',
            'price' => 999.99,
            'stock' => 9,
            'image' => 'zte-axon-40-ultra.jpg',
        ]);

        Product::create([
            'name' => 'Poco F5 Pro',
            'description' => 'Poco F5 Pro with 512GB storage, 6.67-inch AMOLED display, triple-camera system.',
            'price' => 549.99,
            'stock' => 30,
            'image' => 'poco-f5-pro.jpg',
        ]);

        Product::create([
            'name' => 'Lenovo Legion Y90',
            'description' => 'Lenovo Legion Y90 with 1TB storage, 6.92-inch AMOLED display, dual-camera system.',
            'price' => 899.99,
            'stock' => 12,
            'image' => 'lenovo-legion-y90.jpg',
        ]);
    }
}
