<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ZipCode;
use App\Models\FederalEntity;
use App\Models\Settlement;
use App\Models\Municipality;
use App\Models\SettlementType;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(file('CPdescarga.txt') as $row)
        {
            list($zip_code,
            $settlement_name,
            $settlement_type,
            $municipality_name,
            $federal_endity_name,
            $locality,
            $dC,
            $federal_endity_key,
            $cOffice,
            $cCP,
            $settlemet_type_key,
            $municipality_key,
            $id_asent_cpcons,
            $zone_type) = explode('|',$row);


            $federalEntity = FederalEntity::firstOrCreate(
                ['key' => $federal_endity_key],
                [
                'name' => $federal_endity_name,
                'key' => $federal_endity_key
            ]);

            $municipality = Municipality::firstOrCreate(
                [
                'key' => $municipality_key],
               [ 'name' => $municipality_name,
                'key' => $municipality_key
                ]
            );

            $zipCode = ZipCode::firstOrCreate(
                ['zip_code' =>$zip_code],
                [
                    'zip_code' => $zip_code,
                    'locality' => $locality,
                    'federal_entity_id' => $federalEntity->id,
                    'municipality_id' => $municipality->id
                ]
            );

            $settlementType = SettlementType::firstOrCreate(
                ['name' => $settlement_type],
                [
                    'name' => $settlement_type
                ]
            );

            $settlement = Settlement::create(
                [
                    'name' => $settlement_name,
                    'settlement_type_id' => $settlementType->id,
                    'locality' => $locality,
                    'zone_type' => $zone_type,
                    'zip_code_id' => $zipCode->id,
                    'municipality_id' => $municipality->id
                ]
            );

            
            






        }
    }
}
