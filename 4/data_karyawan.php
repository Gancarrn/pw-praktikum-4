<?php
    /*$nama = array("Juggernaut","Axe","Hoodwink","Dazzle","Zeus");
    $ttl = array("Jakarta, 01 Januari 1998","Bandung, 02 Februari 1998","Bogor, 03 Maret 1998","Bekasi, 04 April 1998","Tanggerang, 05 Mei 1998");
    $jenis_kelamin = array("Pria","Pria","Pria","Pria","Pria");
    $level = array("Senior","Junior","Junior","Amateur","Amateur");
    $status = array("Fulltime","Fulltime","Parttime","Parttime","Fulltime");
    $gaji = array();*/


    Class karyawan{
        public $nama;
        public $ttl;
        public $jenis_kelamin;
        public $level;
        public $status;

        //set nama
        function set_nama($nama)
        {
            $this->nama = $nama;
        }
        function get_nama()
        {
            return $this->nama;
        }

        //set ttl
        function set_ttl($ttl)
        {
            $this->ttl = $ttl;
        }
        function get_ttl()
        {
            return $this->ttl;
        }

        //set jenis kelamin
        function set_jenis_kelamin($jenis_kelamin)
        {
            $this->jenis_kelamin = $jenis_kelamin;
        }
        function get_jenis_kelamin()
        {
            return $this->jenis_kelamin;
        }

        //set level
        function set_level($level)
        {
            $this->level = $level;
        }
        function get_level()
        {
            return $this->level;
        }

        //set status
        function set_status($status)
        {
            $this->status = $status;
        }
        function get_status()
        {
            return $this->status;
        }
    }

    class status_karyawan extends karyawan{
        
        //set gaji
        function set_gaji($gaji)
        {
            $this->gaji = $gaji;
        }
        function get_gaji()
        {
            return $this->gaji;
        }
    }

    //objek karyawan 1
    $karyawan1 = new karyawan();

    //set karyawan 1
    $karyawan1->set_nama("Juggernaut");
    $karyawan1->set_ttl("Jakarta, 01 Januari 1998");
    $karyawan1->set_jenis_kelamin("Pria");
    $karyawan1->set_level("Senior");
    $karyawan1->set_status("Fulltime");

    //objek karyawan 2
    $karyawan2 = new karyawan();

    //set karyawan 2
    $karyawan2->set_nama("Axe");
    $karyawan2->set_ttl("Bandung, 02 Februari 1998");
    $karyawan2->set_jenis_kelamin("Pria");
    $karyawan2->set_level("Junior");
    $karyawan2->set_status("Fulltime");

    //objek karyawan 3
    $karyawan3 = new karyawan();

    //set karyawan 3
    $karyawan3->set_nama("Hoodwink");
    $karyawan3->set_ttl("Bogor, 03 Maret 1998");
    $karyawan3->set_jenis_kelamin("Pria");
    $karyawan3->set_level("Junior");
    $karyawan3->set_status("Parttime");

    //objek karyawan 4
    $karyawan4 = new karyawan();

    //set karyawan 4
    $karyawan4->set_nama("Dazzle");
    $karyawan4->set_ttl("Bekasi, 04 April 1998");
    $karyawan4->set_jenis_kelamin("Pria");
    $karyawan4->set_level("Amateur");
    $karyawan4->set_status("Parttime");

    //objek karyawan 5
    $karyawan5 = new karyawan();

    //set karyawan 5
    $karyawan5->set_nama("Zeus");
    $karyawan5->set_ttl("Tanggerang, 05 Mei 1998");
    $karyawan5->set_jenis_kelamin("Pria");
    $karyawan5->set_level("Amateur");
    $karyawan5->set_status("Fulltime");

    $karyawin = array($karyawan1,$karyawan2,$karyawan3,$karyawan4,$karyawan5)
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Tabel Data Karyawan</title>
        <style>
            table, td, th {
                border: 1px solid black;
            }

            table {
                border-collapse: collapse;
                width: 50%;
            }

            td {
                text-align: center;
            }

            table.center {
                margin-left: auto; 
                margin-right: auto;
            }

        </style>
    </head>

    <body>
        <h1 align="center">Tabel Data Karyawan</h1>
    <style>
        body {background-color: lightgray;}   
    </style>

        <table border='1' cellspacing='0' width='200' class="center"><tr>
            <tr bgcolor='#00FF00'>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Level</th>
                <th>Status</th>
                <th>Gaji</th>
            </tr>

            <?php
                for ($i = 0; $i < 5; $i++) {
                    $nomor = 1 + $i;
                    echo "<tr bgcolor='lightgreen'>";
                    echo "<td>", $nomor, "</td>";
                    echo "<td>", $karyawin[$i]->get_nama(), "</td>";
                    echo "<td>", $karyawin[$i]->get_ttl(), "</td>";
                    echo "<td>", $karyawin[$i]->get_jenis_kelamin(), "</td>";
                    echo "<td>", $karyawin[$i]->get_level(), "</td>";
                    echo "<td>", $karyawin[$i]->get_status(), "</td>";
                    if($karyawin[$i]->get_level() == "Senior"){
                        if($karyawin[$i]->get_status() == "Fulltime"){
                            echo "<td>5000000</td>";
                        }
                        else if($karyawin[$i]->get_status() == "Parttime"){
                            echo "<td>2500000</td>";
                        }
                    }
                    else if($karyawin[$i]->get_level() == "Junior"){
                        if($karyawin[$i]->get_status() == "Fulltime"){
                            echo "<td>2000000</td>";
                        }
                        else if($karyawin[$i]->get_status() == "Parttime"){
                            echo "<td>1000000</td>";
                        }
                    }
                    else if($karyawin[$i]->get_level() == "Amateur"){
                        if($karyawin[$i]->get_status() == "Fulltime"){
                            echo "<td>3500000</td>";
                        }
                        else if($karyawin[$i]->get_status() == "Parttime"){
                            echo "<td>1750000</td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>