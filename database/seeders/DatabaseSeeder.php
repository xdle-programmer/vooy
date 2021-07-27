<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('provider_services')->insert([
            ['name' => 'Переговоры с производством'],
            ['name' => 'Таможенное оформление и доставка по России'],
            ['name' => 'Продажа непосредственно из России'],
        ]);

        DB::table('subroles')->insert([
            ['name' => 'Торговый представитель', 'slug' => 'representative'],
            ['name' => 'Дистрибьютер', 'slug' => 'distributor'],
            ['name' => 'Коннектор', 'slug' => 'connector'],
            ['name' => 'Продавец в России', 'slug' => 'ru_seller']
        ]);

        DB::table('currencies')->insert([
            ['name' => 'Рубль', 'code' => 'RUB', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Доллар', 'code' => 'USD', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Юань', 'code' => 'CNY', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Гривна', 'code' => 'UAH', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Белорусский рубль', 'code' => 'BYN', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Тенге', 'code' => 'KZT', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Евро', 'code' => 'EUR', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
            ['name' => 'Фунт стерлингов', 'code' => 'GBP', 'price' => '1', 'price_back' => '1', 'is_active' => '1'],
        ]);

        DB::table('tender_statuses')->insert([
            ['name' => 'Черновик'],
            ['name' => 'Модерация'],
            ['name' => 'Поиск поставщика'],
            ['name' => 'Реализация'],
            ['name' => 'Завершен'],
        ]);

        DB::table('tender_substatuses')->insert([
            ['name' => 'Подключение партнёра'],
            ['name' => 'подстатус 2'],
            ['name' => 'подстатус 3'],
            ['name' => 'подстатус 4'],
        ]);

        DB::table('tender_ownerships')->insert([
            ['name' => 'Форма 1'],
            ['name' => 'Форма 2'],
            ['name' => 'Форма 3'],
            ['name' => 'Форма 4'],
        ]);

        DB::table('sertificats')->insert([
            ['name' => 'Сертификат 1'],
            ['name' => 'Сертификат 2'],
            ['name' => 'Сертификат 3'],
            ['name' => 'Сертификат 4'],
        ]);



    }
}
