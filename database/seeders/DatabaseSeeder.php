<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
       $this->call(BannerSeeder::class);
       $this->call(CategorySeeder::class);
       $this->call(ProductSeeder::class);
       $this->call(SettingSeeder::class);
    }
}