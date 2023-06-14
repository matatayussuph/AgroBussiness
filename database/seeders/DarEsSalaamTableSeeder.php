<?php

use App\Ward;
use App\Region;
use App\District;
use Illuminate\Database\Seeder;

class DarEsSalaamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = Region::create([
            'name' => 'Dar es Salaam',
            'postcode' => 11,
        ]);

        $district = District::create([
            'region_id' => $region->id,
            'name' => 'Ilala CBD',
            'postcode' => 111,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Kivukoni',
            'postcode' => 11101,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Upanga Mashariki',
            'postcode' => 11102,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Upanga Magharibi',
            'postcode' => 11103,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Kisutu',
            'postcode' => 11104,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Mchafukoge',
            'postcode' => 11105,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Kariakoo',
            'postcode' => 11106,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Gerezani',
            'postcode' => 11107,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Jangwani',
            'postcode' => 11108,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district->id,
            'name' => 'Mchikichini',
            'postcode' => 11109,
        ]);

        $district_1 = District::create([
            'region_id' => $region->id,
            'name' => 'Ilala',
            'postcode' => 121,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Ilala',
            'postcode' => 12101,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Buguruni',
            'postcode' => 12102,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Tabata',
            'postcode' => 12103,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kimanga',
            'postcode' => 12104,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Segerea',
            'postcode' => 12105,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kipawa',
            'postcode' => 12106,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Ukonga',
            'postcode' => 12107,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kiwalani',
            'postcode' => 12108,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Vingunguti',
            'postcode' => 12109,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Gongo la mboto',
            'postcode' => 12110,
        ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kitunda',
        'postcode' => 12111 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Pugu',
        'postcode' => 12112 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Majohe',
        'postcode' => 12113 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Msongola',
        'postcode' => 12114 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Chanika',
        'postcode' => 12115 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kinyerezi',
        'postcode' => 12116 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kivule',
        'postcode' => 12117 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Mnyamani',
        'postcode' => 12118 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Liwiti',
        'postcode' => 12119 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Bonyokwa',
        'postcode' => 12120 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kipunguni',
        'postcode' => 12121 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Kisukulu',
        'postcode' => 12122 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Minazi miref',
        'postcode' => 12123 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Buyuni',
        'postcode' => 12124 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Zingiziwa',
        'postcode' => 12125 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Mzinga',
        'postcode' => 12126 ,
    ]);

    Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_1->id,
            'name' => 'Pugu station',
        'postcode' => 12127 ,
    ]);

        $district_2 = District::create([
            'region_id' => $region->id,
            'name' => 'Kinondoni',
            'postcode' => 141,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Magomeni',
            'postcode' => 14101,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Mzimuni',
            'postcode' => 14102,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Ndugumbi',
            'postcode' => 14104,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Tandale',
            'postcode' => 14106,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Makumbusho',
            'postcode' => 14107,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Mwananyamala',
            'postcode' => 14108,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Hananasif',
            'postcode' => 14109,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Kinondoni',
            'postcode' => 14110,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Msasani',
            'postcode' => 14111,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Mikocheni',
            'postcode' => 14112,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Kijitonyama',
            'postcode' => 14113,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Kigogo',
            'postcode' => 14118,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Kawe',
            'postcode' => 14121,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Kunduchi',
            'postcode' => 14122,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Bunju',
            'postcode' => 14125,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Mbweni',
            'postcode' => 14126,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Mbezi Juu',
            'postcode' => 14128,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Makongo',
            'postcode' => 14129,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Wazo',
            'postcode' => 14130,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_2->id,
            'name' => 'Mabwepande',
            'postcode' => 14134,
        ]);


        $district_3 = District::create([
            'region_id' => $region->id,
            'name' => 'Temeke',
            'postcode' => 151,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'TEMEKE',
            'postcode' => '15101',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'SANDALI',
            'postcode' => '15102',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'CHANG’OMBE',
            'postcode' => '15103',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'KEKO',
            'postcode' => '15104',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'MIBURANI',
            'postcode' => '15105',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'AZIMIO',
            'postcode' => '15106',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'TANDIKA',
            'postcode' => '15107',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'MTONI',
            'postcode' => '15108',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'KURASINI',
            'postcode' => '15109',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'MBAGALA KUU',
            'postcode' => '15112',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'MBAGALA',
            'postcode' => '15113',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'MAKANGARAWE',
            'postcode' => '15114',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'YOMBO VITUKA',
            'postcode' => '15115',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'CHAMAZI',
            'postcode' => '15116',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'CHARAMBE',
            'postcode' => '15117',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'TOANGOMA',
            'postcode' => '15118',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'BUZA',
            'postcode' => '15125',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'KILAKALA',
            'postcode' => '15127',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'KIBURUGWA',
            'postcode' => '15128',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'KIJICHI',
            'postcode' => '15129',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'MIANZINI',
            'postcode' => '15130',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'Kibondemaji',
            'postcode' => '15131',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_3->id,
            'name' => 'Kilungule',
            'postcode' => '15132',
        ]);



        $district_4 = District::create([
            'region_id' => $region->id,
            'name' => 'Ubungo',
            'postcode' => 161,
        ]);


        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Mburahati',
            'postcode' => '16101',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Sinza',
            'postcode' => '16102',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Ubungo',
            'postcode' => '16103',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Kimara',
            'postcode' => '16104',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Saranga',
            'postcode' => '16105',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Makuburi',
            'postcode' => '16106',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Makurumla',
            'postcode' => '16107',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Manzese',
            'postcode' => '16108',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Mabibo',
            'postcode' => '16109',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Kibamba',
            'postcode' => '16110',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Kwembe',
            'postcode' => '16111',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Goba',
            'postcode' => '16112',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Mbezi',
            'postcode' => '16113',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_4->id,
            'name' => 'Msigani',
            'postcode' => '16114',
        ]);



        $district_5 = District::create([
            'region_id' => $region->id,
            'name' => 'Kigamboni',
            'postcode' => 171,
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Kimbiji',
            'postcode' => '17101',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Somangila',
            'postcode' => '17102',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Tungi',
            'postcode' => '17103',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Kisarawe II',
            'postcode' => '17104',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Pembamnazi',
            'postcode' => '17105',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Mjimwema',
            'postcode' => '17106',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Kigamboni',
            'postcode' => '17107',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Vijibweni',
            'postcode' => '17108',
        ]);

        Ward::create([
            'region_id' => $region->id,
            'district_id' => $district_5->id,
            'name' => 'Kibada',
            'postcode' => '17109',
        ]);

    }
}