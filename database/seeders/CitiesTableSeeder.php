<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state_id' => 1,
                'name' => 'Ayer Baloi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'state_id' => 1,
                'name' => 'Ayer Hitam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'state_id' => 1,
                'name' => 'Ayer Tawar 2',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'state_id' => 1,
                'name' => 'Ayer Tawar 3',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'state_id' => 1,
                'name' => 'Ayer Tawar 4',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'state_id' => 1,
                'name' => 'Ayer Tawar 5',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'state_id' => 1,
                'name' => 'Bandar Penawar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'state_id' => 1,
                'name' => 'Bandar Tenggara',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'state_id' => 1,
                'name' => 'Batu Anam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'state_id' => 1,
                'name' => 'Batu Pahat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'state_id' => 1,
                'name' => 'Bekok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'state_id' => 1,
                'name' => 'Benut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'state_id' => 1,
                'name' => 'Bukit Gambir',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'state_id' => 1,
                'name' => 'Bukit Pasir',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'state_id' => 1,
                'name' => 'Chaah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'state_id' => 1,
                'name' => 'Endau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'state_id' => 1,
                'name' => 'Gelang Patah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'state_id' => 1,
                'name' => 'Gerisek',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'state_id' => 1,
                'name' => 'Gugusan Taib Andak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'state_id' => 1,
                'name' => 'Jementah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'state_id' => 1,
                'name' => 'Johor Bahru',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'state_id' => 1,
                'name' => 'Kahang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'state_id' => 1,
                'name' => 'Kluang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'state_id' => 1,
                'name' => 'Kota Tinggi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'state_id' => 1,
                'name' => 'Kukup',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'state_id' => 1,
                'name' => 'Kulai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'state_id' => 1,
                'name' => 'Labis',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'state_id' => 1,
                'name' => 'Layang-Layang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'state_id' => 1,
                'name' => 'Masai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'state_id' => 1,
                'name' => 'Mersing',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'state_id' => 1,
                'name' => 'Muar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'state_id' => 1,
                'name' => 'Nusajaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'state_id' => 1,
                'name' => 'Pagoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'state_id' => 1,
                'name' => 'Paloh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'state_id' => 1,
                'name' => 'Panchor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'state_id' => 1,
                'name' => 'Parit Jawa',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'state_id' => 1,
                'name' => 'Parit Raja',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'state_id' => 1,
                'name' => 'Parit Sulong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'state_id' => 1,
                'name' => 'Pasir Gudang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'state_id' => 1,
                'name' => 'Pekan Nenas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'state_id' => 1,
                'name' => 'Pengerang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'state_id' => 1,
                'name' => 'Pontian',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'state_id' => 1,
                'name' => 'Rengam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'state_id' => 1,
                'name' => 'Rengit',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'state_id' => 1,
                'name' => 'Segamat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'state_id' => 1,
                'name' => 'Semerah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'state_id' => 1,
                'name' => 'Senai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'state_id' => 1,
                'name' => 'Senggarang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'state_id' => 1,
                'name' => 'Seri Gading',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'state_id' => 1,
                'name' => 'Seri Medan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'state_id' => 1,
                'name' => 'Simpang Rengam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'state_id' => 1,
                'name' => 'Sri Gading',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'state_id' => 1,
                'name' => 'Sri Medan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'state_id' => 1,
                'name' => 'Sungai Mati',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'state_id' => 1,
                'name' => 'Tangkak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'state_id' => 1,
                'name' => 'Pulau Tioman',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'state_id' => 1,
                'name' => 'Ulu Tiram',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'state_id' => 1,
                'name' => 'Yong Peng',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'state_id' => 2,
                'name' => 'Alor Setar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'state_id' => 2,
                'name' => 'Ayer Hitam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'state_id' => 2,
                'name' => 'Baling',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'state_id' => 2,
                'name' => 'Bandar Baharu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'state_id' => 2,
                'name' => 'Bedong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'state_id' => 2,
                'name' => 'Bukit Kayu Hitam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'state_id' => 2,
                'name' => 'Changloon',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'state_id' => 2,
                'name' => 'Gurun',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'state_id' => 2,
                'name' => 'Jeniang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'state_id' => 2,
                'name' => 'Jitra',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'state_id' => 2,
                'name' => 'Karangan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'state_id' => 2,
                'name' => 'Kepala Batas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'state_id' => 2,
                'name' => 'Kodiang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'state_id' => 2,
                'name' => 'Kota Kuala Muda',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'state_id' => 2,
                'name' => 'Kota Sarang Semut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'state_id' => 2,
                'name' => 'Kuala Kedah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'state_id' => 2,
                'name' => 'Kuala Ketil',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'state_id' => 2,
                'name' => 'Kuala Nerang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'state_id' => 2,
                'name' => 'Kuala Pegang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'state_id' => 2,
                'name' => 'Kulim',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'state_id' => 2,
                'name' => 'Kupang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'state_id' => 2,
                'name' => 'Langgar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'state_id' => 2,
                'name' => 'Langkawi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'state_id' => 2,
                'name' => 'Lunas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'state_id' => 2,
                'name' => 'Merbok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'state_id' => 2,
                'name' => 'Padang Serai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'state_id' => 2,
                'name' => 'Pendang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'state_id' => 2,
                'name' => 'Pokok Sena',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'state_id' => 2,
                'name' => 'Serdang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'state_id' => 2,
                'name' => 'Sik',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'state_id' => 2,
                'name' => 'Simpang Empat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'state_id' => 2,
                'name' => 'Sungai Petani',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'state_id' => 2,
                'name' => 'Universiti Utara Malaysia',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'state_id' => 2,
                'name' => 'Yan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'state_id' => 3,
                'name' => 'Ayer Lanas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'state_id' => 3,
                'name' => 'Bachok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'state_id' => 3,
                'name' => 'Cherang Ruku',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'state_id' => 3,
                'name' => 'Dabong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'state_id' => 3,
                'name' => 'Gua Musang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'state_id' => 3,
                'name' => 'Jeli',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'state_id' => 3,
                'name' => 'Kem Desa Pahlawan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'state_id' => 3,
                'name' => 'Ketereh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'state_id' => 3,
                'name' => 'Kota Bahru',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'state_id' => 3,
                'name' => 'Kota Bharu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'state_id' => 3,
                'name' => 'Kuala Balah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'state_id' => 3,
                'name' => 'Kuala Krai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'state_id' => 3,
                'name' => 'Kubang Kerian',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'state_id' => 3,
                'name' => 'Machang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'state_id' => 3,
                'name' => 'Melor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'state_id' => 3,
                'name' => 'Pasir Mas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'state_id' => 3,
                'name' => 'Pasir Puteh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'state_id' => 3,
                'name' => 'Pulai Chondong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'state_id' => 3,
                'name' => 'Rantau Panjang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'state_id' => 3,
                'name' => 'Selising',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'state_id' => 3,
                'name' => 'Tanah Merah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'state_id' => 3,
                'name' => 'Temangan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'state_id' => 3,
                'name' => 'Tumpat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'state_id' => 3,
                'name' => 'Wakaf Bharu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'state_id' => 5,
                'name' => 'Alor Gajah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'state_id' => 5,
                'name' => 'Asahan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'state_id' => 5,
                'name' => 'Ayer Keroh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'state_id' => 5,
                'name' => 'Bemban',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'state_id' => 5,
                'name' => 'Durian Tunggal',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'state_id' => 5,
                'name' => 'Jasin',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'state_id' => 5,
                'name' => 'Kem Trendak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'state_id' => 5,
                'name' => 'Kuala Sungai Baru',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'state_id' => 5,
                'name' => 'Lubok China',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'state_id' => 5,
                'name' => 'Masjid Tanah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'state_id' => 5,
                'name' => 'Melaka',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'state_id' => 5,
                'name' => 'Merlimau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'state_id' => 5,
                'name' => 'Selandar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'state_id' => 5,
                'name' => 'Sungai Rambai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'state_id' => 5,
                'name' => 'Sungai Udang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'state_id' => 5,
                'name' => 'Tanjong Kling',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'state_id' => 6,
                'name' => 'Bahau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'state_id' => 6,
                'name' => 'Bandar Baru Enstek',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'state_id' => 6,
                'name' => 'Bandar Seri Jempol',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'state_id' => 6,
                'name' => 'Batu Kikir',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'state_id' => 6,
                'name' => 'Gemas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'state_id' => 6,
                'name' => 'Gemencheh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'state_id' => 6,
                'name' => 'Johol',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'state_id' => 6,
                'name' => 'Kota',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'state_id' => 6,
                'name' => 'Kuala Klawang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'state_id' => 6,
                'name' => 'Kuala Pilah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'state_id' => 6,
                'name' => 'Labu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'state_id' => 6,
                'name' => 'Linggi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'state_id' => 6,
                'name' => 'Mantin',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'state_id' => 6,
                'name' => 'Nilai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'state_id' => 6,
                'name' => 'Port Dickson',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'state_id' => 6,
                'name' => 'Pusat  Bandar Palong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'state_id' => 6,
                'name' => 'Rantau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'state_id' => 6,
                'name' => 'Rembau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'state_id' => 6,
                'name' => 'Rompin',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'state_id' => 6,
                'name' => 'Seremban',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'state_id' => 6,
                'name' => 'Si Rusa',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'state_id' => 6,
                'name' => 'Simpang Durian',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'state_id' => 6,
                'name' => 'Simpang Pertang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'state_id' => 6,
                'name' => 'Tampin',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'state_id' => 6,
                'name' => 'Tanjong Ipoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'state_id' => 7,
                'name' => 'Balok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'state_id' => 7,
                'name' => 'Bandar Bera',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'state_id' => 7,
                'name' => 'Bandar Pusat Jengka',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'state_id' => 7,
                'name' => 'Bandar Tun Abdul Razak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'state_id' => 7,
                'name' => 'Benta',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'state_id' => 7,
                'name' => 'Bentong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'state_id' => 7,
                'name' => 'Brinchang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'state_id' => 7,
                'name' => 'Bukit Fraser',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'state_id' => 7,
                'name' => 'Bukit Goh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'state_id' => 7,
                'name' => 'Chenor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'state_id' => 7,
                'name' => 'Chini',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'state_id' => 7,
                'name' => 'Damak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'state_id' => 7,
                'name' => 'Dong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'state_id' => 7,
                'name' => 'Gambang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'state_id' => 7,
                'name' => 'Genting Highlands',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'state_id' => 7,
                'name' => 'Jaya Gading',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'state_id' => 7,
                'name' => 'Jerantut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'state_id' => 7,
                'name' => 'Karak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'state_id' => 7,
                'name' => 'Kemayan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'state_id' => 7,
                'name' => 'Kuala Krau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'state_id' => 7,
                'name' => 'Kuala Lipis',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'state_id' => 7,
                'name' => 'Kuala Rompin',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'state_id' => 7,
                'name' => 'Kuantan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'state_id' => 7,
                'name' => 'Lanchang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'state_id' => 7,
                'name' => 'Lurah Bilut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'state_id' => 7,
                'name' => 'Maran',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'state_id' => 7,
                'name' => 'Mentakab',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'state_id' => 7,
                'name' => 'Muadzam Shah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'state_id' => 7,
                'name' => 'Padang Tengku',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'state_id' => 7,
                'name' => 'Pekan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'state_id' => 7,
                'name' => 'Raub',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'state_id' => 7,
                'name' => 'Ringlet',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'state_id' => 7,
                'name' => 'Sega',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'state_id' => 7,
                'name' => 'Sungai Koyan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'state_id' => 7,
                'name' => 'Sungai Lembing',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'state_id' => 7,
                'name' => 'Sungai Ruan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'state_id' => 7,
                'name' => 'Tanah Rata',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'state_id' => 7,
                'name' => 'Temerloh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'state_id' => 7,
                'name' => 'Triang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'state_id' => 8,
                'name' => 'Ayer Tawar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'state_id' => 8,
                'name' => 'Bagan Datoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'state_id' => 8,
                'name' => 'Bagan Serai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'state_id' => 8,
                'name' => 'Bandar Seri Iskandar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'state_id' => 8,
                'name' => 'Batu Gajah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'state_id' => 8,
                'name' => 'Batu Kurau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'state_id' => 8,
                'name' => 'Behrang Stesen',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'state_id' => 8,
                'name' => 'Bidor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'state_id' => 8,
                'name' => 'Bota',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'state_id' => 8,
                'name' => 'Bruas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'state_id' => 8,
                'name' => 'Changkat Jering',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'state_id' => 8,
                'name' => 'Changkat Keruing',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'state_id' => 8,
                'name' => 'Chemor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'state_id' => 8,
                'name' => 'Chenderiang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'state_id' => 8,
                'name' => 'Chenderong Balai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'state_id' => 8,
                'name' => 'Chikus',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'state_id' => 8,
                'name' => 'Enggor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'state_id' => 8,
                'name' => 'Gerik',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'state_id' => 8,
                'name' => 'Gopeng',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'state_id' => 8,
                'name' => 'Hutan Melintang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'state_id' => 8,
                'name' => 'Intan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'state_id' => 8,
                'name' => 'Ipoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'state_id' => 8,
                'name' => 'Jeram',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'state_id' => 8,
                'name' => 'Kampar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'state_id' => 8,
                'name' => 'Kampung Gajah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'state_id' => 8,
                'name' => 'Kampung Kepayang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'state_id' => 8,
                'name' => 'Kamunting',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'state_id' => 8,
                'name' => 'Kuala Kangsar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'state_id' => 8,
                'name' => 'Kuala Kurau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'state_id' => 8,
                'name' => 'Kuala Sepetang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'state_id' => 8,
                'name' => 'Lambor Kanan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'state_id' => 8,
                'name' => 'Langkap',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'state_id' => 8,
                'name' => 'Lenggong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'state_id' => 8,
                'name' => 'Lumut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'state_id' => 8,
                'name' => 'Malim Nawar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'state_id' => 8,
                'name' => 'Mambang Di Awan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'state_id' => 8,
                'name' => 'Manong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'state_id' => 8,
                'name' => 'Matang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'state_id' => 8,
                'name' => 'Padang Rengas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'state_id' => 8,
                'name' => 'Pangkor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'state_id' => 8,
                'name' => 'Pantai Remis',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'state_id' => 8,
                'name' => 'Parit',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'state_id' => 8,
                'name' => 'Parit Buntar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'state_id' => 8,
                'name' => 'Pengkalan Hulu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'state_id' => 8,
                'name' => 'Pusing',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'state_id' => 8,
                'name' => 'Rantau Panjang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'state_id' => 8,
                'name' => 'Sauk',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'state_id' => 8,
                'name' => 'Selama',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'state_id' => 8,
                'name' => 'Selekoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'state_id' => 8,
                'name' => 'Seri Manjong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'state_id' => 8,
                'name' => 'Seri Manjung',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'state_id' => 8,
                'name' => 'Simpang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'state_id' => 8,
                'name' => 'Simpang Ampat Semanggol',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'state_id' => 8,
                'name' => 'Sitiawan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'state_id' => 8,
                'name' => 'Slim River',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'state_id' => 8,
                'name' => 'Sungai Siput',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'state_id' => 8,
                'name' => 'Sungai Sumun',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'state_id' => 8,
                'name' => 'Sungkai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'state_id' => 8,
                'name' => 'TLDM Lumut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'state_id' => 8,
                'name' => 'Taiping',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'state_id' => 8,
                'name' => 'Tanjong Malim',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'state_id' => 8,
                'name' => 'Tanjong Piandang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'state_id' => 8,
                'name' => 'Tanjong Rambutan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'state_id' => 8,
                'name' => 'Tanjong Tualang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'state_id' => 8,
                'name' => 'Tapah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'state_id' => 8,
                'name' => 'Tapah Road',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'state_id' => 8,
                'name' => 'Teluk Intan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'state_id' => 8,
                'name' => 'Temoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'state_id' => 8,
                'name' => 'Trolak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'state_id' => 8,
                'name' => 'Trong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'state_id' => 8,
                'name' => 'Tronoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'state_id' => 8,
                'name' => 'Ulu Bernam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'state_id' => 8,
                'name' => 'Ulu Kinta',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'state_id' => 9,
                'name' => 'Arau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'state_id' => 9,
                'name' => 'Kaki Bukit',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'state_id' => 9,
                'name' => 'Kangar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'state_id' => 9,
                'name' => 'Kuala Perlis',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'state_id' => 9,
                'name' => 'Padang Besar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'state_id' => 9,
                'name' => 'Simpang Ampat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'state_id' => 10,
                'name' => 'Ayer Itam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'state_id' => 10,
                'name' => 'Balik Pulau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'state_id' => 10,
                'name' => 'Batu Ferringhi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'state_id' => 10,
                'name' => 'Batu Maung',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'state_id' => 10,
                'name' => 'Bayan Lepas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'state_id' => 10,
                'name' => 'Bukit Mertajam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'state_id' => 10,
                'name' => 'Butterworth',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'state_id' => 10,
                'name' => 'Gelugor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'state_id' => 10,
                'name' => 'Jelutong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'state_id' => 10,
                'name' => 'Kepala Batas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'state_id' => 10,
                'name' => 'Kubang Semang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'state_id' => 10,
                'name' => 'Nibong Tebal',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'state_id' => 10,
                'name' => 'Padang Tembak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'state_id' => 10,
                'name' => 'Penaga',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'state_id' => 10,
                'name' => 'Penang Hill',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'state_id' => 10,
                'name' => 'Perai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'state_id' => 10,
                'name' => 'Permatang Pauh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'state_id' => 10,
                'name' => 'Pulau Pinang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'state_id' => 10,
                'name' => 'Simpang Ampat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'state_id' => 10,
                'name' => 'Sungai Jawi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'state_id' => 10,
                'name' => 'Tanjong Bungah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'state_id' => 10,
                'name' => 'Tasek Gelugor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'state_id' => 10,
                'name' => 'USM Pulau Pinang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'state_id' => 12,
                'name' => 'Beaufort',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'state_id' => 12,
                'name' => 'Beluran',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'state_id' => 12,
                'name' => 'Beverly',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'state_id' => 12,
                'name' => 'Bongawan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'state_id' => 12,
                'name' => 'Inanam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'state_id' => 12,
                'name' => 'Keningau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'state_id' => 12,
                'name' => 'Kota Belud',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'state_id' => 12,
                'name' => 'Kota Kinabalu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'state_id' => 12,
                'name' => 'Kota Kinabatangan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'state_id' => 12,
                'name' => 'Kota Marudu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'state_id' => 12,
                'name' => 'Kuala Penyu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'state_id' => 12,
                'name' => 'Kudat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'state_id' => 12,
                'name' => 'Kunak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'state_id' => 12,
                'name' => 'Lahad Datu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'state_id' => 12,
                'name' => 'Likas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'state_id' => 12,
                'name' => 'Membakut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'state_id' => 12,
                'name' => 'Menumbok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'state_id' => 12,
                'name' => 'Nabawan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'state_id' => 12,
                'name' => 'Pamol',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'state_id' => 12,
                'name' => 'Papar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'state_id' => 12,
                'name' => 'Penampang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'state_id' => 12,
                'name' => 'Putatan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'state_id' => 12,
                'name' => 'Ranau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'state_id' => 12,
                'name' => 'Sandakan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'state_id' => 12,
                'name' => 'Semporna',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'state_id' => 12,
                'name' => 'Sipitang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'state_id' => 12,
                'name' => 'Tambunan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'state_id' => 12,
                'name' => 'Tamparuli',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'state_id' => 12,
                'name' => 'Tanjung Aru',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'state_id' => 12,
                'name' => 'Tawau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'state_id' => 12,
                'name' => 'Tenghilan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'state_id' => 12,
                'name' => 'Tenom',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'state_id' => 12,
                'name' => 'Tuaran',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'state_id' => 13,
                'name' => 'Asajaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'state_id' => 13,
                'name' => 'Balingian',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'state_id' => 13,
                'name' => 'Baram',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'state_id' => 13,
                'name' => 'Bau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'state_id' => 13,
                'name' => 'Bekenu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'state_id' => 13,
                'name' => 'Belaga',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'state_id' => 13,
                'name' => 'Belawai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'state_id' => 13,
                'name' => 'Betong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'state_id' => 13,
                'name' => 'Bintangor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'state_id' => 13,
                'name' => 'Bintulu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'state_id' => 13,
                'name' => 'Dalat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'state_id' => 13,
                'name' => 'Daro',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'state_id' => 13,
                'name' => 'Debak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'state_id' => 13,
                'name' => 'Engkilili',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'state_id' => 13,
                'name' => 'Julau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'state_id' => 13,
                'name' => 'Kabong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'state_id' => 13,
                'name' => 'Kanowit',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'state_id' => 13,
                'name' => 'Kapit',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'state_id' => 13,
                'name' => 'Kota Samarahan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'state_id' => 13,
                'name' => 'Kuching',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'state_id' => 13,
                'name' => 'Lawas',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'state_id' => 13,
                'name' => 'Limbang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'state_id' => 13,
                'name' => 'Lingga',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'state_id' => 13,
                'name' => 'Long Lama',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'state_id' => 13,
                'name' => 'Lubok Antu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'state_id' => 13,
                'name' => 'Lundu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'state_id' => 13,
                'name' => 'Lutong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'state_id' => 13,
                'name' => 'Matu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'state_id' => 13,
                'name' => 'Miri',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'state_id' => 13,
                'name' => 'Mukah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'state_id' => 13,
                'name' => 'Nanga Medamit',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'state_id' => 13,
                'name' => 'Niah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'state_id' => 13,
                'name' => 'Pusa',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'state_id' => 13,
                'name' => 'Roban',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'state_id' => 13,
                'name' => 'Saratok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'state_id' => 13,
                'name' => 'Sarikei',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'state_id' => 13,
                'name' => 'Sebauh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'state_id' => 13,
                'name' => 'Sebuyau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'state_id' => 13,
                'name' => 'Serian',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'state_id' => 13,
                'name' => 'Sibu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'state_id' => 13,
                'name' => 'Siburan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'state_id' => 13,
                'name' => 'Simunjan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'state_id' => 13,
                'name' => 'Song',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'state_id' => 13,
                'name' => 'Spaoh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'state_id' => 13,
                'name' => 'Sri Aman',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'state_id' => 13,
                'name' => 'Sundar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'state_id' => 13,
                'name' => 'Tatau',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'state_id' => 14,
                'name' => 'Ampang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'state_id' => 14,
                'name' => 'Bandar Baru Bangi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'state_id' => 14,
                'name' => 'Bandar Puncak Alam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'state_id' => 14,
                'name' => 'Bangi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'state_id' => 14,
                'name' => 'Banting',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'state_id' => 14,
                'name' => 'Batang Berjuntai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'state_id' => 14,
                'name' => 'Batang Kali',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'state_id' => 14,
                'name' => 'Batangkali',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'state_id' => 14,
                'name' => 'Batu Arang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'state_id' => 14,
                'name' => 'Batu Caves',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'state_id' => 14,
                'name' => 'Beranang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'state_id' => 14,
                'name' => 'Bukit Rotan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'state_id' => 14,
                'name' => 'Cheras',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'state_id' => 14,
                'name' => 'Cyberjaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'state_id' => 14,
                'name' => 'Dengkil',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'state_id' => 14,
                'name' => 'Gombak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'state_id' => 14,
                'name' => 'Hulu Langat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'state_id' => 14,
                'name' => 'Jenjarom',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'state_id' => 14,
                'name' => 'Jeram',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'state_id' => 14,
                'name' => 'KLIA',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'state_id' => 14,
                'name' => 'Kajang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'state_id' => 14,
                'name' => 'Kapar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'state_id' => 14,
                'name' => 'Kerling',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'state_id' => 14,
                'name' => 'Klang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'state_id' => 14,
                'name' => 'Kuala Kubu Bharu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'state_id' => 14,
                'name' => 'Kuala Selangor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'state_id' => 14,
                'name' => 'Pandan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'state_id' => 14,
                'name' => 'Pelabuhan Klang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'state_id' => 14,
                'name' => 'Petaling Jaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'state_id' => 14,
                'name' => 'Puchong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'state_id' => 14,
                'name' => 'Pulau Carey',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'state_id' => 14,
                'name' => 'Pulau Indah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'state_id' => 14,
                'name' => 'Pulau Ketam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'state_id' => 14,
                'name' => 'Rasa',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'state_id' => 14,
                'name' => 'Rawang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'state_id' => 14,
                'name' => 'Sabak Bernam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'state_id' => 14,
                'name' => 'Sekinchan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'state_id' => 14,
                'name' => 'Semenyih',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'state_id' => 14,
                'name' => 'Sepang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'state_id' => 14,
                'name' => 'Serdang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'state_id' => 14,
                'name' => 'Serendah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'state_id' => 14,
                'name' => 'Seri Kembangan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'state_id' => 14,
                'name' => 'Shah Alam',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'state_id' => 14,
                'name' => 'Subang Airport',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'state_id' => 14,
                'name' => 'Subang Jaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'state_id' => 14,
                'name' => 'Sungai Ayer Tawar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'state_id' => 14,
                'name' => 'Sungai Besar',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'state_id' => 14,
                'name' => 'Sungai Buloh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'state_id' => 14,
                'name' => 'Sungai Pelek',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'state_id' => 14,
                'name' => 'Tanjong Karang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'state_id' => 14,
                'name' => 'Tanjong Sepat',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'state_id' => 14,
                'name' => 'Telok Panglima Garang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'state_id' => 15,
                'name' => 'Ajil',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'state_id' => 15,
                'name' => 'Al Muktatfi Billah Shah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'state_id' => 15,
                'name' => 'Ayer Puteh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'state_id' => 15,
                'name' => 'Bukit Besi',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'state_id' => 15,
                'name' => 'Bukit Payong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'state_id' => 15,
                'name' => 'Ceneh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'state_id' => 15,
                'name' => 'Chalok',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'state_id' => 15,
                'name' => 'Cukai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'state_id' => 15,
                'name' => 'Dungun',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'state_id' => 15,
                'name' => 'Jerteh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'state_id' => 15,
                'name' => 'Kampung Raja',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'state_id' => 15,
                'name' => 'Kemasek',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'state_id' => 15,
                'name' => 'Kerteh',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'state_id' => 15,
                'name' => 'Ketengah Jaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'state_id' => 15,
                'name' => 'Kijal',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'state_id' => 15,
                'name' => 'Kuala Berang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'state_id' => 15,
                'name' => 'Kuala Besut',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'state_id' => 15,
                'name' => 'Kuala Terengganu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'state_id' => 15,
                'name' => 'Marang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'state_id' => 15,
                'name' => 'Paka',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'state_id' => 15,
                'name' => 'Permaisuri',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'state_id' => 15,
                'name' => 'Sungai Tong',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'state_id' => 4,
                'name' => 'Batu Caves',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'state_id' => 4,
                'name' => 'Kuala Lumpur',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'state_id' => 4,
                'name' => 'Setapak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'state_id' => 16,
                'name' => 'Labuan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'state_id' => 11,
                'name' => 'Putrajaya',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'state_id' => 1,
                'name' => 'Johor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'state_id' => 2,
                'name' => 'Kedah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'state_id' => 3,
                'name' => 'Kelantan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'state_id' => 5,
                'name' => 'Melaka',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'state_id' => 6,
                'name' => 'Negeri Sembilan',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'state_id' => 7,
                'name' => 'Pahang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'state_id' => 8,
                'name' => 'Perak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'state_id' => 9,
                'name' => 'Perlis',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'state_id' => 10,
                'name' => 'Pulau Pinang',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'state_id' => 12,
                'name' => 'Sabah',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'state_id' => 13,
                'name' => 'Sarawak',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'state_id' => 14,
                'name' => 'Selangor',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'state_id' => 15,
                'name' => 'Terengganu',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'state_id' => 1,
                'name' => 'Skudai',
                'created_at' => '2023-10-01 10:00:00',
                'updated_at' => '2023-10-01 10:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}