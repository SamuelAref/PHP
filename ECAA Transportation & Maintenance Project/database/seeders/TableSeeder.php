<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use App\Models\Transport;
use App\Models\Cars;
use App\Models\driver;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transport::create([
            'requested_by' => 'someone',
            'travelers_name'  => 'someone',
            'destination'  => 'somewhere',
            'reason'     => 'for a reson',
            'driver_name'     =>'Driver Driver',
            'request_status'  => 'Approved',
            
        ]);
       $data=[
                [
                    'model'                 => 'TOYOTA  LANDCRUISER',
                    'license_plate_number'  => '4-05368',
                    'Year'                  => '1998 GC',
                    'age'                   => '22',
                    'Motor_number'          => '1Hz-0271609',
                    'chassis_number'        => 'JTZ11PTA507003578',
                    'location'              => 'BahirDar',
                    'service_type'          => 'Service',
                    'car_status'            => 'Assigned',//1
                ],
                [
                    'model'                 => 'suzuki Automobil',//2
                    'license_plate_number'  => '4-01560',
                    'Year'                  => '2003 GC',
                    'age'                   => '17',
                    'Motor_number'          => 'M16A-1044437',
                    'chassis_number'        => 'RA315-150163',
                    'location'              => 'A.A',
                    'service_type'          => 'AUTHORITY',
                    'car_status'            => 'under maintenance',
                ],
                ['model'                => 'suzuki Automobil',
                'license_plate_number'  => '4-01558',
                'Year'                  => '2003 GC',
                'age'                   => '17',
                'Motor_number'          => 'M16A-1044408',
                'chassis_number'        => 'RA315-150174',
                'location'              => 'A.A',
                'service_type'          => 'AUTHORITY',
                'car_status'            => 'Assigned',],//3
                [
                    'model'                 => 'suzuki Automobil',
                    'license_plate_number'  => '4-01559',
                    'Year'                  => '2003 GC',
                    'age'                   => '17',
                    'Motor_number'          => 'M16A-1044666',
                    'chassis_number'        => 'RA315-150187',
                    'location'              => 'A.A',
                    'service_type'          => 'AUTHORITY',
                    'car_status'            => 'Assigned',//4
                ],
                [
                    'model'                 => 'TOYOTA  CORROLA Automobil',
                    'license_plate_number'  => '4-08363',
                    'Year'                  => '1998 GC',
                    'age'                   => '22',
                    'Motor_number'          => '2E-3072258',
                    'chassis_number'        => 'JTBS 3 EE130WOO11449',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'under maintenance',//5
                ],
                [
                    'model'                 => 'TOYOTA  minibus(mekelle)',
                    'license_plate_number'  => '4-04501',
                    'Year'                  => '2002 GC',
                    'age'                   => '19',
                    'Motor_number'          => '1RZ-2792943',
                    'chassis_number'        => 'RZH14-7004851',
                    'location'              => 'MEKELLE',
                    'service_type'          => 'Service',
                    'car_status'            => 'under maintenance',//6
                ],
                [
                    'model'                 => 'TOYOTA  minibus',
                    'license_plate_number'  => '4-01892',
                    'Year'                  => '2002 GC',
                    'age'                   => '19',
                    'Motor_number'          => '1RZ-2791329',
                    'chassis_number'        => 'RZH14-7004844',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//7
                ],
                [
                    'model'                 => 'Mitsubishi pickup',
                    'license_plate_number'  => '4-03451',
                    'Year'                  => '1992 GC',
                    'age'                   => '28',
                    'Motor_number'          => '4G63-MV8438',
                    'chassis_number'        => 'DNK320NP00351',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//8
                ],
                [
                    'model'                 => 'TOYOTA  Landcruiser',
                    'license_plate_number'  => '4-04502',
                    'Year'                  => '1994 GC',
                    'age'                   => '26',
                    'Motor_number'          => '1FZ-0194477',
                    'chassis_number'        => 'FZJ80-0114093',
                    'location'              => 'Mekelle',
                    'service_type'          => 'Service',
                    'car_status'            => 'accident',//9
                ],
                [
                    'model'                 => 'Yamaha Motorcycle',
                    'license_plate_number'  => '4-0207',
                    'Year'                  => '2003 GC',
                    'age'                   => '17',
                    'Motor_number'          => '3TS-087843',
                    'chassis_number'        => 'DGOIX-006877',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//10
                ],
                [
                    'model'                 => 'TOYOTA  Minibus',
                    'license_plate_number'  => '4-01378',
                    'Year'                  => '2002 GC',
                    'age'                   => '18',
                    'Motor_number'          => '1RZ-27955006',
                    'chassis_number'        => 'RZH14-7004865',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//11
                ],
                [
                    'model'                 => 'TOYOTA  LandCruiser',
                    'license_plate_number'  => '4-13140',
                    'Year'                  => '2007 GC',
                    'age'                   => '13',
                    'Motor_number'          => '1HZ-0565416',
                    'chassis_number'        => 'JTECB09J803034863',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Good Condition',//12
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-24066',
                    'Year'                  => '2016 GC',
                    'age'                   => '4',
                    'Motor_number'          => '2GD-4036856',
                    'chassis_number'        => 'MRODB CD5 G0010418',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Good Condition',//13
                ],
                [
                    'model'                 => 'Nissan Minibus',
                    'license_plate_number'  => '4-13166',
                    'Year'                  => '2007 GC',
                    'age'                   => '13',
                    'Motor_number'          => 'ZD30-125392K',
                    'chassis_number'        => 'JN1TG4E2507 21442',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//14
                ],
                [
                    'model'                 => 'Mitsubishi Minibus',
                    'license_plate_number'  => '4-13169',
                    'Year'                  => '2007 GC',
                    'age'                   => '13',
                    'Motor_number'          => '4D33L53044',
                    'chassis_number'        => 'BE637J-F00293',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//15
                ],
                [
                    'model'                 => 'Mitsubishi Minibus',
                    'license_plate_number'  => '4-13170',
                    'Year'                  => '2007 GC',
                    'age'                   => '13',
                    'Motor_number'          => '4D33L61388',
                    'chassis_number'        => 'BE637J-F00574',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//16
                ],
                [
                    'model'                 => 'Mitsubishi Minibus',
                    'license_plate_number'  => '4-13171',
                    'Year'                  => '2007 GC',
                    'age'                   => '13',
                    'Motor_number'          => '4D33L53941',
                    'chassis_number'        => 'BE637J-F00325',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//17
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-14689',
                    'Year'                  => '2010 GC',
                    'age'                   => '10',
                    'Motor_number'          => '2KD-6480214',
                    'chassis_number'        => 'MROFR 22 G 7AO558498',
                    'location'              => 'DIRE DAWA',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//18
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-16364',
                    'Year'                  => '2012 GC',
                    'age'                   => '8',
                    'Motor_number'          => '2KD-5581417',
                    'chassis_number'        => 'MROFR 22 G2C0604791',
                    'location'              => 'JIMMA',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//19
                ],
                [
                    'model'                 => 'TATA Minibus',
                    'license_plate_number'  => '4-17164',
                    'Year'                  => '2011 GC',
                    'age'                   => '9',
                    'Motor_number'          => '697D41PYY87143C',
                    'chassis_number'        => 'MTA 38122C 7LO1949',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//20
                ],
                [
                    'model'                 => 'TATA Minibus',
                    'license_plate_number'  => '4-17165',
                    'Year'                  => '2011 GC',
                    'age'                   => '9',
                    'Motor_number'          => '697D41PYY871229',
                    'chassis_number'        => 'MTA 38122C 7LO1945',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//21
                ],
                [
                    'model'                 => 'Lifan Automobil',
                    'license_plate_number'  => '4-16385',
                    'Year'                  => '2014 GC',
                    'age'                   => '6',
                    'Motor_number'          => 'LF479Q140100689',
                    'chassis_number'        => 'LLV2AA10E0080237',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//22
                ],
                [
                    'model'                 => 'Lifan Automobil',
                    'license_plate_number'  => '4-16386',
                    'Year'                  => '2014 GC',
                    'age'                   => '6',
                    'Motor_number'          => 'LF479Q140100683',
                    'chassis_number'        => 'LLV2A2A18E0080244',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//23
                ],
                [
                    'model'                 => 'TOYOTA  Hard Top',
                    'license_plate_number'  => '4-20214',
                    'Year'                  => '2014 GC',
                    'age'                   => '6',
                    'Motor_number'          => '1HZ0794596',
                    'chassis_number'        => 'JTEEB71JX07025698',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//24
                ],
                [
                    'model'                 => 'Mitsubishi Pickup',
                    'license_plate_number'  => '4-20220',
                    'Year'                  => '2013 GC',
                    'age'                   => '7',
                    'Motor_number'          => '4M40UAE8284',
                    'chassis_number'        => 'MMBJNKB70FDO39496',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//25
                ],
                [
                    'model'                 => 'Mitsubishi Pickup',
                    'license_plate_number'  => '4-20351',
                    'Year'                  => '2013 GC',
                    'age'                   => '7',
                    'Motor_number'          => '4M40UAE8288',
                    'chassis_number'        => 'MMBJNKB70FDO39488',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//26
                ],
                [
                    'model'                 => 'TATA Bus',
                    'license_plate_number'  => '4-20792',
                    'Year'                  => '2014 GC',
                    'age'                   => '6',
                    'Motor_number'          => '41G84174854',
                    'chassis_number'        => 'MAT462271OL01710',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//27
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-21037',
                    'Year'                  => '2014 GC',
                    'age'                   => '6',
                    'Motor_number'          => '2KD-FTV-545403',
                    'chassis_number'        => 'MROFR22G2FO735577',
                    'location'              => 'DIRE DAWA',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//28
                ],
                [
                    'model'                 => 'NISSAN Pickup',
                    'license_plate_number'  => '4-21336',
                    'Year'                  => '2014 GC',
                    'age'                   => '6',
                    'Motor_number'          => 'YD25570706T',
                    'chassis_number'        => 'ADNCPUD22Z0048226',
                    'location'              => 'BAHIRDAR',
                    'service_type'          => 'Service',
                    'car_status'            => 'Accident',//29
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-22779',
                    'Year'                  => '2008 GC',
                    'age'                   => '12',
                    'Motor_number'          => '2KD-7494722',
                    'chassis_number'        => 'MROFR22G380645454',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//30
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-22958',
                    'Year'                  => '2008 GC',
                    'age'                   => '12',
                    'Motor_number'          => '2KD-7723941',
                    'chassis_number'        => 'MROFR22G990661627',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Available',//31
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-22959',
                    'Year'                  => '2008 GC',
                    'age'                   => '12',
                    'Motor_number'          => '2KD-7727959',
                    'chassis_number'        => 'MROFR22G790541180',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//32
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-23030',
                    'Year'                  => '2008 GC',
                    'age'                   => '12',
                    'Motor_number'          => '2KD-7727151',
                    'chassis_number'        => 'MROFR22G790661755',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//33
                ],
                [
                    'model'                 => 'TOYOTA  Pickup',
                    'license_plate_number'  => '4-23047',
                    'Year'                  => '2008 GC',
                    'age'                   => '12',
                    'Motor_number'          => '2KD-7728937',
                    'chassis_number'        => 'MROFR22G090661841',
                    'location'              => 'MEKELLE',
                    'service_type'          => 'Service',
                    'car_status'            => 'Lost/Taken',//34
                ],
                [
                    'model'                 => 'TOYOTA  Landcruiser',
                    'license_plate_number'  => '4-22908',
                    'Year'                  => '2006 GC',
                    'age'                   => '14',
                    'Motor_number'          => '1HZ-052493',
                    'chassis_number'        => 'JTECBO9J03029475',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Available',//35
                ],
                [
                    'model'                 => 'TOYOTA  Landcruiser',
                    'license_plate_number'  => '4-22915',
                    'Year'                  => '2006 GC',
                    'age'                   => '14',
                    'Motor_number'          => '1HZ-0522591',
                    'chassis_number'        => 'JTECBO9J50302491',
                    'location'              => 'A.A',
                    'service_type'          => 'Service',
                    'car_status'            => 'Under Maintenance',//36
                ],
                [
                    'model'                 => 'TOYOTA  Landcruiser',
                    'license_plate_number'  => '4-24616',
                    'Year'                  => '2016 GC',
                    'age'                   => '4',
                    'Motor_number'          => '1HZ-0828394',
                    'chassis_number'        => 'JTGE73J7F9016376',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Good Condition',//37
                ],
                [
                    'model'                 => 'Automobil',
                    'license_plate_number'  => '4-26511',
                    'Year'                  => '2018 GC',
                    'age'                   => '3',
                    'Motor_number'          => 'S2NE286',
                    'chassis_number'        => 'LGJIFE02JT410682',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Good Condition',//38
                ],
                [
                    'model'                 => 'Automobil',
                    'license_plate_number'  => '4-26520',
                    'Year'                  => '2018 GC',
                    'age'                   => '3',
                    'Motor_number'          => 'S2NE459',
                    'chassis_number'        => 'LGJIFE02JT410682',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Good Condition',//39
                ],
                [
                    'model'                 => 'Automobil',
                    'license_plate_number'  => '4-26521',
                    'Year'                  => '2018 GC',
                    'age'                   => '3',
                    'Motor_number'          => 'S2NE285',
                    'chassis_number'        => 'LGJIFE02JT410682',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Good Condition',//40
                ],
                [
                    'model'                 => 'Automobil',
                    'license_plate_number'  => '4-26522',
                    'Year'                  => '2018 GC',
                    'age'                   => '3',
                    'Motor_number'          => 'S2NE378',
                    'chassis_number'        => 'LGJIFE02JT410682',
                    'location'              => 'A.A',
                    'service_type'          => 'Authority',
                    'car_status'            => 'Good Condition',//41
                ]
            ];
           foreach ($data as $key => $d) {
               DB::table('cars')->insert($d);
               $this->command->info($key);
           }
            
            $drivers=[
                [
                'first_name' =>'Tariku',
                'last_name'  =>'T/tsadik' //5
                ],
                [
                    'first_name' =>'Alemayehu',
                    'last_name'  =>'Wedaj' //6
                ],
                [
                    'first_name' =>'Loye',
                    'last_name'  =>'Dagim' //7
                ],
                [
                    'first_name' =>'Ashenaki',
                    'last_name'  =>'Regassa' //8
                ],
                [
                    'first_name' =>'Yirefshewa',
                    'last_name'  =>'Gedle' //9
                ],
                [
                    'first_name' =>'Wendyifraw',
                    'last_name'  =>'Shewa' //10
                ],
                [
                    'first_name' =>'Alemayehu',
                    'last_name'  =>'Aseffa' //11
                ],
                [
                    'first_name' =>'Sahile ',
                    'last_name'  =>'Mohammed' //12
                ],
                [
                    'first_name' =>'Wondiye',
                    'last_name'  =>'Assefa' //13
                ],
                [
                    'first_name' =>'Solomon',
                    'last_name'  =>'Bekele' //14
                ],
                [
                    'first_name' =>'Biruke',
                    'last_name'  =>'Dinku' //15
                ],
                [
                    'first_name' =>'Abiy',
                    'last_name'  =>'Fanta' //16
                ],
                [
                    'first_name' =>'Ermias',
                    'last_name'  =>'Michael' //17
                ],
                [
                    'first_name' =>'Haile',
                    'last_name'  =>'Ambachew' //18
                ],
                [
                    'first_name' =>'Zinabe',
                    'last_name'  =>'Semaw' //19
                ],
                [
                    'first_name' =>'Yohannis',
                    'last_name'  =>'Abera' //20
                ],
                [
                    'first_name' =>'Woldegebriel',
                    'last_name'  =>'Assefa' //21
                ],
                [
                    'first_name' =>'Mulugeta',
                    'last_name'  =>'Gobena' //22
                ],
                [
                    'first_name' =>'Tewodros',
                    'last_name'  =>'Ababte' //23
                ],
                [
                    'first_name' =>'Tefera',
                    'last_name'  =>'Degife' //24
                ],
                [
                    'first_name' =>'Mehari',
                    'last_name'  =>'T/ab' //25
                ],
                [
                    'first_name' =>'Gezahegn',
                    'last_name'  =>'Beyene' //26
                ],
        ];
      
            foreach ($drivers as $keys => $e) {
                DB::table('drivers')->insert($e);
                $this->command->info($keys);
            }
    }
}
