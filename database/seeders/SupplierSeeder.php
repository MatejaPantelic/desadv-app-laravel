<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create(['id'=>'138128942', 'name'=>'SPA']);
        Supplier::create(['id'=>'STMEUR', 'name'=>'STM']);
        Supplier::create(['id'=>'STMZ', 'name'=>'STM']);
        Supplier::create(['id'=>'OSRAMOSRBG', 'name'=>'OSR']);
        Supplier::create(['id'=>'OSRAMOSRBGTEST', 'name'=>'OSR']);
        Supplier::create(['id'=>'SCGPROD', 'name'=>'ONS']);
        Supplier::create(['id'=>'SCGTEST', 'name'=>'ONS']);
        Supplier::create(['id'=>'NATLSEMI', 'name'=>'NSC']);
        Supplier::create(['id'=>'52290567S081', 'name'=>'FME']);
        Supplier::create(['id'=>'52290567S080', 'name'=>'FME']);
        Supplier::create(['id'=>'FAIRCHILD', 'name'=>'FAI']);
        Supplier::create(['id'=>'001325463EMEA', 'name'=>'FSL']);
        Supplier::create(['id'=>'ATMELBOX1', 'name'=>'ATM']);
        Supplier::create(['id'=>'VISHAY-EU', 'name'=>'VIS']);
        Supplier::create(['id'=>'VISHAY-EU-TEST', 'name'=>'VIS']);
        Supplier::create(['id'=>'DEKTOSHC.DETOEL01', 'name'=>'TOS']);
        Supplier::create(['id'=>'DEKTOSHC.DETOEL03', 'name'=>'TOS']);
        Supplier::create(['id'=>'IFX.B2B.PROD', 'name'=>'INF']);
        Supplier::create(['id'=>'IFX.B2B.TEST', 'name'=>'INF']);
        Supplier::create(['id'=>'HRS0004', 'name'=>'INC']);
        Supplier::create(['id'=>'BSI', 'name'=>'BSI']);
        Supplier::create(['id'=>'5013546104076', 'name'=>'NXP']);
        Supplier::create(['id'=>'608208245', 'name'=>'ISS']);
        Supplier::create(['id'=>'084963177GSPGN', 'name'=>'AVA']);
        Supplier::create(['id'=>'AVAGO-MA', 'name'=>'AVA']);
        Supplier::create(['id'=>'084963177GSPGNT', 'name'=>'AVA']);
        Supplier::create(['id'=>'NUMONYXEMEA', 'name'=>'NUM']);
        Supplier::create(['id'=>'SNWEUR', 'name'=>'STE']);
        Supplier::create(['id'=>'KAMINO', 'name'=>'14']);
        Supplier::create(['id'=>'SAMSUNGSEMNT', 'name'=>'SAM']);
        Supplier::create(['id'=>'GBTXI.TXI002US', 'name'=>'TID']);
        Supplier::create(['id'=>'093120871', 'name'=>'MIC']);
        Supplier::create(['id'=>'093120871T', 'name'=>'MIC']);
        Supplier::create(['id'=>'4399902104579', 'name'=>'EVL']);
        Supplier::create(['id'=>'102108446WP:01', 'name'=>'ALT']);
        Supplier::create(['id'=>'102108446WP', 'name'=>'CYP']);
        Supplier::create(['id'=>'IDTEDIUS', 'name'=>'IDT']);
        Supplier::create(['id'=>'IDTB2BPRD', 'name'=>'IDT']);
        Supplier::create(['id'=>'IDTB2BTST', 'name'=>'IDT']);
        Supplier::create(['id'=>'IDTEDITST', 'name'=>'IDT']);
        Supplier::create(['id'=>'MCHPPROD', 'name'=>'MCH']);
        Supplier::create(['id'=>'MCHPTEST', 'name'=>'MCH']);
        Supplier::create(['id'=>'MAXIMACTG', 'name'=>'MXM']);
        Supplier::create(['id'=>'WEENVANP', 'name'=>'WEN']);
        Supplier::create(['id'=>'WEENVANT', 'name'=>'WEN']);
        Supplier::create(['id'=>'491683766VANP', 'name'=>'AMP']);
        Supplier::create(['id'=>'491683766VANT', 'name'=>'AMP']);
        Supplier::create(['id'=>'492020517VANP', 'name'=>'NEX']);
        Supplier::create(['id'=>'492020517VANT', 'name'=>'NEX']);
        Supplier::create(['id'=>'492020517AS2P', 'name'=>'NEX']);
        Supplier::create(['id'=>'5013546104069', 'name'=>'NXP']);
        Supplier::create(['id'=>'9255838400', 'name'=>'BRI']);
        Supplier::create(['id'=>'9255838400T', 'name'=>'BRI']);
        Supplier::create(['id'=>'9494501080', 'name'=>'BRO']);
        Supplier::create(['id'=>'ALTERAINT', 'name'=>'ALT']);
        Supplier::create(['id'=>'ALTERAIRL', 'name'=>'ALT']);
        Supplier::create(['id'=>'ANALOGDEVICES', 'name'=>'ADI']);
        Supplier::create(['id'=>'ANALOGASAP', 'name'=>'ADI']);
        Supplier::create(['id'=>'MAXIMACTGTEST', 'name'=>'MXM']);
        Supplier::create(['id'=>'MAXIMACTGMXM', 'name'=>'MXM']);

        Supplier::create(['id'=>'KIE-EU-PROD', 'name'=>'NEW']);
    }
}
