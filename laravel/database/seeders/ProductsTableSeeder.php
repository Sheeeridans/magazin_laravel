<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone X 64GB',
                'code' => 'iphone_x_64',
                'description' => 'Отличный продвинутый телефон с памятью на 64 gb',
                'price' => '71990',
                'category_id' => 1,
                'image' => 'products/iphone_x.jpg',
                'count' => rand(0, 10),
                'name_en' => 'iPhone X 64GB',
                'description_en' => 'A great advanced phone with 64 gb of memory',
            ],
            [
                'name' => 'iPhone X 256GB',
                'code' => 'iphone_x_256',
                'description' => 'Отличный продвинутый телефон с памятью на 256 gb',
                'price' => '89990',
                'category_id' => 1,
                'image' => 'products/iphone_x_silver.jpg',
                'count' => rand(0, 10),
                'name_en' => 'iPhone X 256GB',
                'description_en' => 'A great advanced phone with 256 gb of memory',
            ],
            [
                'name' => 'HTC One S',
                'code' => 'htc_one_s',
                'description' => 'Зачем платить за лишнее? Легендарный HTC One S',
                'price' => '12490',
                'category_id' => 1,
                'image' => 'products/htc_one_s.png',
                'count' => rand(0, 10),
                'name_en' => 'HTC One S',
                'description_en' => 'Why pay for the extra? The legendary HTC One S',
            ],
            [
                'name' => 'iPhone 5SE',
                'code' => 'iphone_5se',
                'description' => 'Отличный классический iPhone',
                'price' => '17221',
                'category_id' => 1,
                'image' => 'products/iphone_5.jpg',
                'count' => rand(0, 10),
                'name_en' => 'iPhone 5SE',
                'description_en' => 'Great classic iPhone',
            ],
            [
                'name' => 'Наушники Beats Audio',
                'code' => 'beats_audio',
                'description' => 'Отличный звук от Dr. Dre',
                'price' => '20221',
                'category_id' => 2,
                'image' => 'products/beats.jpg',
                'count' => rand(0, 10),
                'name_en' => 'Beats Audio Headphones',
                'description_en' => 'Great sound from Dr. Dre',
            ],
            [
                'name' => 'Камера GoPro',
                'code' => 'gopro',
                'description' => 'Снимай самые яркие моменты с помощью этой камеры',
                'price' => '12000',
                'category_id' => 2,
                'image' => 'products/gopro.jpg',
                'count' => rand(0, 10),
                'name_en' => 'GoPro Camera',
                'description_en' => 'Capture the brightest moments with this camera',
            ],
            [
                'name' => 'Камера Panasonic HC-V770',
                'code' => 'panasonic_hc-v770',
                'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
                'price' => '27900',
                'category_id' => 2,
                'image' => 'products/video_panasonic.jpg',
                'count' => rand(0, 10),
                'name_en' => 'Panasonic HC-V770 Camera',
                'description_en' => 'Serious video shooting requires a serious camera. Panasonic HC-V770 is the best choice for this purpose!',
            ],
            [
                'name' => 'Кофемашина DeLongi',
                'code' => 'delongi',
                'description' => 'Хорошее утро начинается с хорошего кофе!',
                'price' => '25200',
                'category_id' => 3,
                'image' => 'products/delongi.jpg',
                'count' => rand(0, 10),
                'name_en' => 'DeLongi Coffee Machine',
                'description_en' => 'A good morning starts with a good coffee!',
            ],
            [
                'name' => 'Холодильник Haier',
                'code' => 'haier',
                'description' => 'Для большой семьи большой холодильник!',
                'price' => '40200',
                'category_id' => 3,
                'image' => 'products/haier.jpg',
                'count' => rand(0, 10),
                'name_en' => 'Haier Refrigerator',
                'description_en' => 'For a large family, a large refrigerator!',
            ],
            [
                'name' => 'Блендер Moulinex',
                'code' => 'moulinex',
                'description' => 'Для самых смелых идей',
                'price' => '4200',
                'category_id' => 3,
                'image' => 'products/moulinex.jpg',
                'count' => rand(0, 10),
                'name_en' => 'Moulinex Blender',
                'description_en' => 'For the most daring ideas',
            ],
            [
                'name' => 'Мясорубка Bosch',
                'code' => 'bosch',
                'description' => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
                'price' => '9200',
                'category_id' => 3,
                'image' => 'products/bosch.jpg',
                'count' => rand(0, 10),
                'name_en' => 'Bosch Meat Grinder',
                'description_en' => 'Do you like homemade cutlets? You should definitely look at this meat grinder!',
            ],
            [
                'name' => 'Samsung Galaxy J6',
                'code' => 'samsung_j6',
                'description' => 'Современный телефон начального уровня',
                'price' => '11980',
                'category_id' => 1,
                'image' => 'products/samsung_j6.jpg',
                'count' => rand(0, 10),
                'name_en' => 'Samsung Galaxy J6',
                'description_en' => 'A modern entry-level phone',
            ],
        ]);
    }
}
