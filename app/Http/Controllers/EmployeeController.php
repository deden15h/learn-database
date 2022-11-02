<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Any;

//use\Carbon\Carbon; untuk waktu sekarang

class EmployeeController extends Controller
{
    public function select()
    {
        //soal1
        $soal1 = DB::table('Employees')->get();

        //soal2
        $soal2 = DB::table('Employees')->where('tanggal_masuk', '<', '2018-01-01')->get();

        //soal3
        $soal3 = DB::table('Employees')->where('jabatan', '=', 'Manajer')->get();

        //soal4
        $soal4 = DB::table('Employees')->where('status', '=', 1)->get();

        //soal5
        $soal5= DB::table('Employees')->where('jabatan', '=', 'Staf')->where('status', '=', '0')->get();

        //soal6
        $soal6 = DB::table('Employees')->where('nip', 'LIKE', 'GU%')->get();

        //soal7
        $soal7 = DB::table('Employees')->get();

        //soal8
        //$soal8 = DB::select("SELECT ('SYSDATE', '-', 'tanggal_masuk', 'AS', 'jumlah_hari') FROM Employees");
        //$soal8 = DB::table('Employees')->select('nama_pegawai');

        //soal9
        $soal9 = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->get();
        $soal9ku = DB::table('Employees')->where('nip', 'LIKE', 'KU%')->get();
        $soal9mk = DB::table('Employees')->where('nip', 'LIKE', 'MK%')->get();
        $soal9pr = DB::table('Employees')->where('nip', 'LIKE', 'PR%')->get();
        $soal9gu = DB::table('Employees')->where('nip', 'LIKE', 'GU%')->get();
        $soal9dv = DB::table('Employees')->where('nip', 'LIKE', 'DV%')->get();

        //soal10
        $soal10 = DB::table('Employees')->where('jabatan', 'Staf')->get();
        $soal10a = DB::table('Employees')->where('jabatan', 'Asisten Manajer')->get();
        $soal10m = DB::table('Employees')->where('jabatan', 'Manajer')->get();
        $soal10s = DB::table('Employees')->where('jabatan', 'Supervisor')->get();
        $soal10k = DB::table('Employees')->where('jabatan', 'Kepala')->get();

        //soal11
        $soal11 = DB::table('Employees')->where('Status', 0)->get();
        $soal111 = DB::table('Employees')->where('Status', 1)->get();
        $soal112 = DB::table('Employees')->where('Status', 2)->get();
        $soal113 = DB::table('Employees')->where('Status', 3)->get();

        //soal12
        //$soal12 = DB::table('Employees')->where('tanggal_masuk', '<', any('tanggal_masuk'))->get();

        //soal13
        //soal14
        //soal15
        //soal16
        //$soal16 = DB::table('Employees')->where( 'jabatan', 'SUM','Staf')->get();
        //saol17
        //soal18
        $soal18 = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('Status', 0)->get();
        $soal18a = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('Status', 1)->get();
        $soal18b = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('Status', 2)->get();
        $soal18c = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('Status', 3)->get();
        $soal18d = DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('Status', 0)->get();
        $soal18e = DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('Status', 1)->get();
        $soal18f = DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('Status', 2)->get();
        $soal18g = DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('Status', 3)->get();
        $soal18h = DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('Status', 0)->get();
        $soal18i = DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('Status', 1)->get();
        $soal18j = DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('Status', 2)->get();
        $soal18k = DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('Status', 3)->get();
        $soal18l = DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('Status', 0)->get();
        $soal18m = DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('Status', 1)->get();
        $soal18n = DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('Status', 2)->get();
        $soal18o = DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('Status', 3)->get();
        $soal18p = DB::table('Employees')->where('nip', 'LIKE', 'GU%')->where('Status', 0)->get();
        $soal18q = DB::table('Employees')->where('nip', 'LIKE', 'GU%')->where('Status', 1)->get();
        $soal18r = DB::table('Employees')->where('nip', 'LIKE', 'GU%')->where('Status', 2)->get();
        $soal18s = DB::table('Employees')->where('nip', 'LIKE', 'GU%')->where('Status', 3)->get();
        $soal18t = DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('Status', 0)->get();
        $soal18u = DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('Status', 1)->get();
        $soal18v = DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('Status', 2)->get();
        $soal18w = DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('Status', 3)->get();

        //soal19
        $soal19 = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('jabatan', 'Staf')->get();
        $soal19a = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('jabatan', 'Asisten Manjer')->get();
        $soal19b = DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('jabatan', 'Manajer')->get();
        $soal19c= DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('jabatan', 'Suvervisor')->get();
        $soal19d= DB::table('Employees')->where('nip', 'LIKE', 'IT%')->where('jabatan', 'Kepala')->get();
        $soal19e= DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('jabatan', 'Staf')->get();
        $soal19f= DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('jabatan', 'Asisten Manjer')->get();
        $soal19g= DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('jabatan', 'Manajer')->get();
        $soal19h= DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('jabatan', 'Suvervisor')->get();
        $soal19i= DB::table('Employees')->where('nip', 'LIKE', 'KU%')->where('jabatan', 'Kepala')->get();
        $soal19j= DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('jabatan', 'Staf')->get();
        $soal19k= DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('jabatan', 'Asisten Manjer')->get();
        $soal19l= DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('jabatan', 'Manajer')->get();
        $soal19m= DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('jabatan', 'Suvervisor')->get();
        $soal19n= DB::table('Employees')->where('nip', 'LIKE', 'MK%')->where('jabatan', 'Kepala')->get();
        $soal19o= DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('jabatan', 'Staf')->get();
        $soal19p= DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('jabatan', 'Asisten Manjer')->get();
        $soal19q= DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('jabatan', 'Manajer')->get();
        $soal19r= DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('jabatan', 'Suvervisor')->get();
        $soal19s= DB::table('Employees')->where('nip', 'LIKE', 'PR%')->where('jabatan', 'Kepala')->get();
        $soal19t= DB::table('Employees')->where('nip', 'LIKE', 'DU%')->where('jabatan', 'Staf')->get();
        $soal19u= DB::table('Employees')->where('nip', 'LIKE', 'DU%')->where('jabatan', 'Asisten Manjer')->get();
        $soal19v= DB::table('Employees')->where('nip', 'LIKE', 'DU%')->where('jabatan', 'Manajer')->get();
        $soal19w= DB::table('Employees')->where('nip', 'LIKE', 'DU%')->where('jabatan', 'Suvervisor')->get();
        $soal19x= DB::table('Employees')->where('nip', 'LIKE', 'DU%')->where('jabatan', 'Kepala')->get();
        $soal19y= DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('jabatan', 'Staf')->get();
        $soal19z= DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('jabatan', 'Asisten Manjer')->get();
        $soal191= DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('jabatan', 'Manajer')->get();
        $soal193= DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('jabatan', 'Suvervisor')->get();
        $soal192= DB::table('Employees')->where('nip', 'LIKE', 'DV%')->where('jabatan', 'Kepala')->get();
        //soal20

        return view('index', compact('soal1','soal2','soal3','soal4','soal5', 'soal6','soal7',
                                     'soal9','soal9ku','soal9mk','soal9pr','soal9gu','soal9dv',
                                     'soal10','soal10a','soal10m','soal10s','soal10k',
                                     'soal11','soal111','soal112','soal113',
                                     'soal18','soal18a','soal18b','soal18c','soal18d','soal18e','soal18f','soal18g',
                                     'soal18h','soal18i','soal18j','soal18k','soal18l','soal18m','soal18n','soal18o',
                                     'soal18p','soal18q','soal18r','soal18s','soal18t','soal18u','soal18v','soal18w',
                                     'soal19','soal19a','soal19b','soal19c','soal19d','soal19e','soal19f','soal19g','soal19h',
                                     'soal19i','soal19j','soal19k','soal19l','soal19m','soal19n','soal19o','soal19p','soal19q',
                                     'soal19r','soal19s','soal19t','soal19u','soal19v','soal19w','soal19x','soal19y','soal19z',
                                     'soal191','soal192','soal193'));
    }

    public function insert()
    {
        $result = DB::table('Employees')->insert(
            [
                //staf
                [
                    'nip' => 'IT001',
                    'nama_pegawai' => 'Ikbal',
                    'tanggal_lahir' => '1991-02-17',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2017-07-17',
                    'status' => '1'
                ],

                [
                    'nip' => 'IT006',
                    'nama_pegawai' => 'Gunawan',
                    'tanggal_lahir' => '1994-11-23',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2019-09-27',
                    'status' => '1'
                ],

                [
                    'nip' => 'KU001',
                    'nama_pegawai' => 'Firman',
                    'tanggal_lahir' => '1998-09-12',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2020-03-01',
                    'status' => '0'
                ],

                [
                    'nip' => 'KU006',
                    'nama_pegawai' => 'Adhi',
                    'tanggal_lahir' => '1969-12-12',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2016-05-20',
                    'status' => '3'
                ],

                [
                    'nip' => 'MK001',
                    'nama_pegawai' => 'Maharani',
                    'tanggal_lahir' => '1972-04-17',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2015-09-23',
                    'status' => '1'
                ],

                [
                    'nip' => 'MK006',
                    'nama_pegawai' => 'Lala',
                    'tanggal_lahir' => '1999-04-24',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2021-02-03',
                    'status' => '2'
                ],

                [
                    'nip' => 'PR001',
                    'nama_pegawai' => 'Kusuma',
                    'tanggal_lahir' => '2000-12-27',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2022-02-02',
                    'status' => '1'
                ],

                [
                    'nip' => 'PR006',
                    'nama_pegawai' => 'Kristina',
                    'tanggal_lahir' => '1994-03-21',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2018-11-28',
                    'status' => '1'
                ],

                [
                    'nip' => 'GU001',
                    'nama_pegawai' => 'Kinara',
                    'tanggal_lahir' => '1993-12-23',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2018-09-02',
                    'status' => '1'
                ],

                [
                    'nip' => 'GU006',
                    'nama_pegawai' => 'Kholid',
                    'tanggal_lahir' => '1996-07-19',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2020-07-13',
                    'status' => '0'
                ],

                [
                    'nip' => 'DV001',
                    'nama_pegawai' => 'Keyra',
                    'tanggal_lahir' => '1995-11-23',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2021-07-13',
                    'status' => '1'
                ],

                [
                    'nip' => 'DV006',
                    'nama_pegawai' => 'Imelda',
                    'tanggal_lahir' => '1997-07-28',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2022-01-23',
                    'status' => '2'
                ],

                //Asisten Manajer
                [
                    'nip' => 'IT002',
                    'nama_pegawai' => 'Fabiandi',
                    'tanggal_lahir' => '1987-05-15',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2017-03-29',
                    'status' => '1'
                ],

                [
                    'nip' => 'KU002',
                    'nama_pegawai' => 'Dicki',
                    'tanggal_lahir' => '1979-03-09',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2015-08-13',
                    'status' => '3'
                ],

                [
                    'nip' => 'MK002',
                    'nama_pegawai' => 'Intan',
                    'tanggal_lahir' => '1985-02-13',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2016-09-03',
                    'status' => '1'
                ],

                [
                    'nip' => 'PR002',
                    'nama_pegawai' => 'Hendiana',
                    'tanggal_lahir' => '1994-10-27',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2020-12-21',
                    'status' => '0'
                ],

                [
                    'nip' => 'GU002',
                    'nama_pegawai' => 'Handani',
                    'tanggal_lahir' => '1997-10-10',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2021-02-24',
                    'status' => '1'
                ],

                [
                    'nip' => 'DV002',
                    'nama_pegawai' => 'Gina',
                    'tanggal_lahir' => '1993-07-08',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2022-04-17',
                    'status' => '1'
                ],

                //Manajer
                [
                    'nip' => 'IT003',
                    'nama_pegawai' => 'Bimo',
                    'tanggal_lahir' => '1989-12-23',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2017-06-17',
                    'status' => '0'
                ],

                [
                    'nip' => 'KU003',
                    'nama_pegawai' => 'Fitria',
                    'tanggal_lahir' => '1983-01-01',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2016-08-24',
                    'status' => '1'
                ],

                [
                    'nip' => 'MK003',
                    'nama_pegawai' => 'Bayu',
                    'tanggal_lahir' => '1981-12-31',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2015-11-24',
                    'status' => '1'
                ],

                [
                    'nip' => 'PR003',
                    'nama_pegawai' => 'Feny',
                    'tanggal_lahir' => '1991-08-15',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2019-04-18',
                    'status' => '1'
                ],

                [
                    'nip' => 'GU003',
                    'nama_pegawai' => 'Febrian',
                    'tanggal_lahir' => '1995-03-19',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2020-01-21',
                    'status' => '0'
                ],

                [
                    'nip' => 'DV003',
                    'nama_pegawai' => 'Eka',
                    'tanggal_lahir' => '1998-05-21',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2021-12-19',
                    'status' => '1'
                ],

                //Supervisor

                [
                    'nip' => 'IT004',
                    'nama_pegawai' => 'Bima',
                    'tanggal_lahir' => '1987-09-17',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2017-09-29',
                    'status' => '0'
                ],

                [
                    'nip' => 'KU004',
                    'nama_pegawai' => 'Adit',
                    'tanggal_lahir' => '1989-12-21',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2019-02-05',
                    'status' => '3'
                ],

                [
                    'nip' => 'MK004',
                    'nama_pegawai' => 'Hendra',
                    'tanggal_lahir' => '1986-07-09',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2015-03-09',
                    'status' => '1'
                ],

                [
                    'nip' => 'PR004',
                    'nama_pegawai' => 'Doni',
                    'tanggal_lahir' => '1995-07-16',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2020-06-03',
                    'status' => '1'
                ],

                [
                    'nip' => 'GU004',
                    'nama_pegawai' => 'Fitria',
                    'tanggal_lahir' => '1988-09-17',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2019-09-09',
                    'status' => '1'
                ],

                [
                    'nip' => 'DV004',
                    'nama_pegawai' => 'Dina',
                    'tanggal_lahir' => '1989-08-20',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2020-10-10',
                    'status' => '1'
                ],

                //Kepala
                [
                    'nip' => 'IT005',
                    'nama_pegawai' => 'Taufiq',
                    'tanggal_lahir' => '1959-09-28',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2015-07-15',
                    'status' => '1'
                ],

                [
                    'nip' => 'KU005',
                    'nama_pegawai' => 'Wildan',
                    'tanggal_lahir' => '1986-10-15',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2018-11-09',
                    'status' => '1'
                ],

                [
                    'nip' => 'MK005',
                    'nama_pegawai' => 'Nursyfa',
                    'tanggal_lahir' => '1985-12-06',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2017-09-25',
                    'status' => '1'
                ],

                [
                    'nip' => 'PR005',
                    'nama_pegawai' => 'Rafli',
                    'tanggal_lahir' => '1992-07-19',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2019-05-17',
                    'status' => '0'
                ],

                [
                    'nip' => 'GU005',
                    'nama_pegawai' => 'Tita',
                    'tanggal_lahir' => '1987-05-13',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2020-08-17',
                    'status' => '1'
                ],

                [
                    'nip' => 'DV005',
                    'nama_pegawai' => 'Herlan',
                    'tanggal_lahir' => '1973-09-29',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2015-09-23',
                    'status' => '1'
                ],
            ]
        );

        dump($result);
    }
}
