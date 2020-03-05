<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = \Carbon\Carbon::now();
        $provinces = [
            ['code'=>'01','name'=>'AZUAY','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'02','name'=>'BOLIVAR','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'03','name'=>'CAÑAR','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'04','name'=>'CARCHI','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'05','name'=>'COTOPAXI','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'06','name'=>'CHIMBORAZO','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'07','name'=>'EL ORO','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'08','name'=>'ESMERALDAS','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'09','name'=>'GUAYAS','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'10','name'=>'IMBABURA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'11','name'=>'LOJA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'12','name'=>'LOS RIOS','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'13','name'=>'MANABI','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'14','name'=>'MORONA SANTIAGO','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'15','name'=>'NAPO','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'16','name'=>'PASTAZA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'17','name'=>'PICHINCHA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'18','name'=>'TUNGURAHUA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'19','name'=>'ZAMORA CHINCHIPE','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'20','name'=>'GALAPAGOS','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'21','name'=>'SUCUMBIOS','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'22','name'=>'ORELLANA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'23','name'=>'SANTO DOMINGO DE LOS TSACHILAS','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'24','name'=>'SANTA ELENA','created_at'=>$date,'updated_at'=>$date],
            ['code'=>'90','name'=>'ZONAS NO DELIMITADAS','created_at'=>$date,'updated_at'=>$date],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
