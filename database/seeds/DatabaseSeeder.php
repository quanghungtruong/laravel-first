<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call('ProductSeeder');
    }
}
class CategorySeeder extends Seeder
{

    public function run()
    {
        DB::table('category')->insert([
            array('cat_name'=>'Xe Đức'),
            array('cat_name'=>'Xe Mỹ'),
            array('cat_name'=>'Xe Thái Lan')
        ]);
    }
}
class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('product')->insert([
            array('pro_name'=>'Xe Toyota','cat_id'=>4),
            array('cat_name'=>'Xe Ford','cat_id'=>5),
            array('cat_name'=>'Xe SYM','cat_id'=>6)
        ]);
    }
}