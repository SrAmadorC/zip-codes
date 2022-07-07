<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('federal_entities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('federal_entities');
    }

    // "zip_code": "22110",
//     "locality": "TIJUANA",
//     "federal_entity": {
//         "key": 2,
//         "name": "BAJA CALIFORNIA",
//         "code": null
//     },
//     "settlements": [
//         {
//             "key": 5,
//             "name": "RESIDENCIAL VILLAFLORES",
//             "zone_type": "URBANO",
//             "settlement_type": {
//                 "name": "Fraccionamiento"
//             }
//         },
//         {
//             "key": 63,
//             "name": "BUENAVENTURA",
//             "zone_type": "URBANO",
//             "settlement_type": {
//                 "name": "Fraccionamiento"
//             }
//         },
//         {
//             "key": 752,
//             "name": "LOS PIRULES",
//             "zone_type": "URBANO",
//             "settlement_type": {
//                 "name": "Colonia"
//             }
//         },
//         {
//             "key": 890,
//             "name": "CHAPULTEPEC ALAMAR",
//             "zone_type": "URBANO",
//             "settlement_type": {
//                 "name": "Colonia"
//             }
//         },
//         {
//             "key": 892,
//             "name": "LOS ALAMOS",
//             "zone_type": "URBANO",
//             "settlement_type": {
//                 "name": "Colonia"
//             }
//         }
//     ],
//     "municipality": {
//         "key": 4,
//         "name": "TIJUANA"
//     }
// }
};
