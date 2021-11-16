<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  \App\Models\Header;
use Illuminate\Support\Facades\DB;

 class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data =[
           ['id'=>0,'image_url'=>'pc.jpg','detail'=>'نظام محاسبي متكامل','created_at'=>now(),'updated_at'=>now()]
       ];
       DB::table('headers')->delete();
         Header::insert($data);
    }
}
