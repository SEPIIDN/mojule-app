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
        DB::table('products')->insert([
            [
                'name'=>'OnePlus Nord 2T 5G Dual SIM Jade Mist 128GB and 8GB RAM',
                "price"=>"300",
                "description"=>"Dual SIM smartphone with 5G connectivity, 128GB of storage and 8GB of RAM, 6.43-inch AMOLED screen at 90Hz, rear cameras of 50+8+2MP and front camera of 32MP.",
                "category"=>"mobile",
                "gallery"=>"https://cdn.movertix.com/media/catalog/product/cache/image/1200x/o/n/oneplus-nord-2t-5g-dual-sim-jade-fog-128gb-and-8gb-ram-front.jpg"
            ],
            [
                'name'=>'Panasonic TX-50JX600E',
                "price"=>"400",
                "description"=>"Treat yourself to high-quality, connected entertainment with the Pansonic TX-50JX600E. With a screen diagonal of 127 cm, this model offers a 4K HDR viewing experience with Smart TV and Dolby Atmos compatible stereo sound system.",
                "category"=>"tv",
                "gallery"=>"https://media.ldlc.com/r1600/ld/products/00/05/90/04/LD0005900421_1_0005922505.jpg"
            ],
            [
                'name'=>'ASUS TUF GAMING F15',
                "price"=>"500",
                "description"=>"Geared for serious gaming and real-world durability, the TUF Gaming F15 is a fully-loaded Windows 10 Pro gaming laptop that can carry you to victory.",
                "category"=>"laptop",
                "gallery"=>"https://www.asus.com/media/global/gallery/4nobskjpgxuxirct_setting_xxx_0_90_end_2000.png"
            ],
            [
                'name'=>'LG 215 L Single Door Refrigerator with Smart Inverter Compressor',
                "price"=>"200",
                "description"=>"Smart Inverter Compressor
                Smart Connect
                MOIST ‘N’ FRESH
                Toughened Glass Shelves
                Stabilizer Free 90V ~ 310V
                4 Star Rating",
                "category"=>"fridge",
                "gallery"=>"https://www.lg.com/in/images/refrigerators/md06235496/gallery/GL-D221ABCY-Refrigerators-Front-View-D-01-VF.jpg"
             ]
        ]);
    }
}
