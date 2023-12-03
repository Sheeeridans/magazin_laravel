<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'name' => 'Цвет',
                'name_en' => 'Color',
                'options' => [
                    [
                        'name' => 'Белый',
                        'name_en' => 'White',
                    ],
                    [
                        'name' => 'Черный',
                        'name_en' => 'Black',
                    ],
                    [
                        'name' => 'Серебристый',
                        'name_en' => 'Silver',
                    ],
                    [
                        'name' => 'Золотой',
                        'name_en' => 'Gold',
                    ],
                    [
                        'name' => 'Красный',
                        'name_en' => 'Red',
                    ],
                    [
                        'name' => 'Синий',
                        'name_en' => 'Blue',
                    ],
                    [
                        'name' => '-',
                        'name_en' => '-',
                    ],
                ],
            ],
            [
                'name' => 'Внутренняя память',
                'name_en' => 'Memory',
                'options' => [
                    [
                        'name' => '256Гб',
                        'name_en' => '256Gb',
                    ],
                    [
                        'name' => '64Гб',
                        'name_en' => '64Gb',
                    ],
                    [
                        'name' => '128Гб',
                        'name_en' => '128Gb',
                    ],
                    [
                        'name' => '512Гб',
                        'name_en' => '512Gb',
                    ],
                    [
                        'name' => '1Тб',
                        'name_en' => '1Tb',
                    ],
                    [
                        'name' => '-',
                        'name_en' => '-',
                    ],
                ],
            ],
        ];

        foreach ($properties as $property) {
            $property['created_at'] = Carbon::now();
            $property['updated_at'] = Carbon::now();
            $options = $property['options'];
            unset($property['options']);
            $propertyId = DB::table('properties')->insertGetId($property);

            foreach ($options as $option) {
                $option['created_at'] = Carbon::now();
                $option['updated_at'] = Carbon::now();
                $option['property_id'] = $propertyId;
                DB::table('property_options')->insert($option);
            }
        }

        $categories = [
            [
                'name' => 'Системные блоки',
                'name_en' => 'System blocks',
                'code' => 'pc',
                'description' => 'В этом разделе вы найдёте самые популярные системные блоки по отличным ценам!',
                'description_en' => 'In this section you will find the most popular system blocks at great prices!',
                'image' => 'categories/pc.jpg',
                'products' => [
                    [
                        'name' => 'Компьютер iRU Game 310H5GMA',
                        'name_en' => 'Computer iRU Game 310H5GMA',
                        'code' => 'iru_game_1',
                        'description' => 'Intel Core i5 11400F, DDR4 16ГБ, 1ТБ(SSD), NVIDIA GeForce RTX 3050 - 8192 Мб, Free DOS',
                        'description_en' => 'Intel Core i5 11400F, DDR4 16ГБ, 1ТБ(SSD), NVIDIA GeForce RTX 3050 - 8192 Мб, Free DOS',
                        'image' => 'products/iru_game_1.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 8,
                            ],
                            [
                                2, 11,
                            ],
                            [
                                2, 12,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Компьютер HYPERPC Lumen 7',
                        'name_en' => 'Computer HYPERPC Lumen 7',
                        'code' => 'HYPERPC_Lumen_7',
                        'description' => 'Intel Core i7 14700KF, DDR5 32ГБ, 2ТБ(SSD), NVIDIA GeForce RTX 4070 - 12288 Мб, Windows 11 Home',
                        'description_en' => 'Intel Core i7 14700KF, DDR5 32ГБ, 2ТБ(SSD), NVIDIA GeForce RTX 4070 - 12288 Мб, Windows 11 Home',
                        'image' => 'products/HYPERPC_Lumen_7.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 8,
                            ],
                            [
                                2, 11,
                            ],
                            [
                                2, 12,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Компьютер iRU Office 510B6GM',
                        'name_en' => 'Computer iRU Office 510B6GM',
                        'code' => 'iru_office',
                        'description' => 'Intel Core i5 12400, DDR4 16ГБ, 512ГБ(SSD), Intel UHD Graphics 730, Free DOS',
                        'description_en' => 'Intel Core i5 12400, DDR4 16ГБ, 512ГБ(SSD), Intel UHD Graphics 730, Free DOS',
                        'image' => 'products/iru_office.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 8,
                            ],
                            [
                                2, 11,
                            ],
                            [
                                2, 12,
                            ],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Ноутбуки',
                'name_en' => 'Laptops',
                'code' => 'laptops',
                'description' => 'В этом разделе вы найдёте самые популярные Ноутбуки по отличным ценам!',
                'description_en' => 'In this section you will find the most popular laptops at great prices!',
                'image' => 'categories/laptops.jpg',
                'products' => [
                    [
                        'name' => 'Ноутбук Huawei MateBook D 15 BoDE-WDH9',
                        'name_en' => 'Huawei MateBook D 15 BoDE-WDH9',
                        'code' => 'huawei_matebook',
                        'description' => '15.6", IPS, Intel Core i5 1155G7 2.5ГГц, 4-ядерный, 8ГБ DDR4, 256ГБ SSD, Intel Iris Xe graphics',
                        'description_en' => '15.6", IPS, Intel Core i5 1155G7 2.5ГГц, 4-ядерный, 8ГБ DDR4, 256ГБ SSD, Intel Iris Xe graphics',
                        'image' => 'products/huawei_matebook.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 8,
                            ],
                            [
                                2, 11,
                            ],
                            [
                                2, 12,
                            ],
                            [
                                3, 8,
                            ],
                            [
                                3, 11,
                            ],
                            [
                                3, 12,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Ноутбук игровой MSI GF63 Thin 11UCX-1609XRU',
                        'name_en' => 'MSI GF63 Thin 11UCX-1609XRU',
                        'code' => 'msi_gaming',
                        'description' => '15.6", IPS, Intel Core i5 11260H 2.6ГГц, 6-ядерный, 16ГБ DDR4, 256ГБ SSD, NVIDIA GeForce RTX 2050 - 4 ГБ, Free DOS',
                        'description_en' => '15.6", IPS, Intel Core i5 11260H 2.6ГГц, 6-ядерный, 16ГБ DDR4, 256ГБ SSD, NVIDIA GeForce RTX 2050 - 4 ГБ, Free DOS',
                        'image' => 'products/msi_gaming.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 11,
                            ],
                            [
                                2, 12,
                            ],
                            [
                                6, 11,
                            ],
                            [
                                6, 12,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Ноутбук Digma EVE 15 C423 [9s7-16r612-1609]',
                        'name_en' => 'Digma EVE 15 C423 [9s7-16r612-1609]',
                        'code' => 'digmabook',
                        'description' => '15.6", IPS, AMD Ryzen 3 3200U 2.6ГГц, 2-ядерный, 8ГБ DDR4, 512ГБ SSD, AMD Radeon Vega 3, Windows 11 Professional',
                        'description_en' => '15.6", IPS, AMD Ryzen 3 3200U 2.6ГГц, 2-ядерный, 8ГБ DDR4, 512ГБ SSD, AMD Radeon Vega 3, Windows 11 Professional',
                        'image' => 'products/digmabook.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 8,
                            ],
                            [
                                2, 11,
                            ],
                            [
                                3, 8,
                            ],
                            [
                                4, 11,
                            ],
                        ],
                    ],
                ]
            ],
            [
                'name' => 'Комплектующие для ПК',
                'name_en' => 'PC Accessories',
                'code' => 'komplektuyuschie-dlya-pk',
                'description' => 'В этом разделе вы найдёте самые популярные комплектующие для ПК по отличным ценам!',
                'description_en' => 'In this section you will find the most popular PC Accessories at great prices!',
                'image' => 'categories/komplektuyuschie-dlya-pk.jpg',
                'products' => [
                    [
                        'name' => 'Процессор Intel Core i5 12400F, OEM',
                        'name_en' => 'Intel Core i5 12400F Processor, OEM',
                        'code' => 'intel_core_i5',
                        'description' => 'Процессор Intel Core i5 12400F, LGA 1700, OEM [cm8071504650609s rl5z]',
                        'description_en' => 'Intel Core i5 12400F processor, LGA 1700, OEM [CM8071504650609S RL5Z]',
                        'image' => 'products/intel_core_i5.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                7, 13,
                            ],
                        ],
                    ],


                ]
            ],

            [
                'name' => 'Мониторы',
                'name_en' => 'Monitors',
                'code' => 'monitors',
                'description' => 'В этом разделе вы найдёте самые популярные Мониторы по отличным ценам!',
                'description_en' => 'In this section you will find the most popular monitors at great prices!',
                'image' => 'categories/monitors.jpg',
                'products' => [
                    [
                        'name' => 'Монитор Huawei MateView SE SSN-24BZ 23.8"',
                        'name_en' => 'Huawei MateView SE SSN-24BZ 23.8" Monitor',
                        'code' => 'huawei_matewiew',
                        'description' => 'Конструктив: регулировка наклона, крепление VESA отсутствует,',
                        'description_en' => 'Constructive: tilt adjustment, no VESA mount,',
                        'image' => 'products/huawei_matewiew.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 13,
                            ],
                        ],
                    ],


                ]
            ],
            [
                'name' => 'Портативная техника',
                'name_en' => 'Portable',
                'code' => 'portable',
                'description' => 'Раздел с портативной техникой.',
                'description_en' => 'Section with portables.',
                'image' => 'categories/portable.jpg',
                'products' => [
                    [
                        'name' => 'Современные наушники Beats Audio',
                        'name_en' => 'Headphones Beats Audio',
                        'code' => 'beats_audio',
                        'description' => 'Отличный звук от Dr. Dre',
                        'description_en' => 'Great sound from Dr. Dre',
                        'image' => 'products/beats.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                2, 13,
                            ],
                            [
                                5, 13,
                            ],
                            [
                                6, 13,
                            ]
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Мобильные телефоны',
                'name_en' => 'Mobile phones',
                'code' => 'mobiles',
                'description' => 'В этом разделе вы найдёте самые популярные мобильные телефоны по отличным ценам!',
                'description_en' => 'Mobile phones section with best prices for best popular phones!',
                'image' => 'categories/mobile.jpg',
                'products' => [
                    [
                        'name' => 'Apple iPhone Xs',
                        'name_en' => 'Apple iPhone Xs',
                        'code' => 'iphone_xs',
                        'description' => 'Огромный продвинутый телефон',
                        'description_en' => 'The best huge phone',
                        'image' => 'products/iphone_x_silver.jpg',
                        'properties' => [
                            1, 2,
                        ],
                        'options' => [
                            [
                                1, 8,
                            ],
                            [
                                1, 9,
                            ],
                            [
                                2, 8,
                            ],
                            [
                                2, 9,
                            ],
                            [
                                3, 8,
                            ],
                            [
                                3, 9,
                            ],
                            [
                                4, 8,
                            ],
                            [
                                4, 9,
                            ],
                        ],
                    ],
                ]
            ],
        ];

        foreach ($categories as $category) {
            $category['created_at'] = Carbon::now();
            $category['updated_at'] = Carbon::now();
            $products = $category['products'];
            unset($category['products']);
            $categoryId = DB::table('categories')->insertGetId($category);

            foreach ($products as $product) {
                $product['created_at'] = Carbon::now();
                $product['updated_at'] = Carbon::now();
                $product['hit'] = !boolval(rand(0, 3));
                $product['recommend'] = !boolval(rand(0, 2));
                $product['new'] = !boolval(rand(0, 4));
                $product['category_id'] = $categoryId;

                if (isset($product['properties'])) {
                    $properties = $product['properties'];
                    unset($product['properties']);
                    $skusOptions = $product['options'];
                    unset($product['options']);
                }

                $productId = DB::table('products')->insertGetId($product);

                if (isset($properties)) {
                    foreach ($properties as $propertyId) {
                        DB::table('property_product')->insert([
                            'product_id' => $productId,
                            'property_id' => $propertyId,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);
                    }

                    foreach ($skusOptions as $skuOptions) {
                        $skuId = DB::table('skus')->insertGetId([
                            'product_id' => $productId,
                            'count' => rand(1, 25),
                            'price' => rand(5000, 100000),
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);

                        foreach ($skuOptions as $skuOption) {
                            $skuData['sku_id'] = $skuId;
                            $skuData['property_option_id'] = $skuOption;
                            $skuData['created_at'] = Carbon::now();
                            $skuData['updated_at'] = Carbon::now();

                            DB::table('sku_property_option')->insert($skuData);
                        }
                    }

                    unset($properties);
                } else {
                    DB::table('skus')->insert([
                        'product_id' => $productId,
                        'count' => rand(1, 25),
                        'price' => rand(5000, 100000),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }
        }
    }
}
