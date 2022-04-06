<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ders-5</title>
</head>


<body>

<h3>Php'de Diziler Devam </h3>
<?php

    $isimler = array();
    $isimler[] = "Mehmet";
    $isimler[] = "Canan";
    $isimler[] = "Kemal";
    $isimler[] = "Nur";

    echo "<pre>";
    print_r($isimler);
    echo "</pre><hr>";


    $isimler2 = array();
    $isimler2{"İsim1"} = "Mehmet";
    $isimler2{"İsim2"} = "Canan";
    $isimler2{"İsim3"} = "Kemal";
    $isimler2{"İsim4"} = "Nur";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";



    $ogrenciDetay= array(
    "id"        => 1,
    "adi"       => "Havva",
    "soyadi"    => "Yıldız",
    "bolum"     => "Bilgisayar",
    "yas"       => 20,
    "dersler"   => array(
        "ders1" => "Web Programlama",
        "ders2" => "Veri Tabanı",
        "ders3" => "Mobil Programlama"
    ),
    "sınıf"     => 2,
    "memleket"  => "İzmir"
);

/* Uygulama;
Çıktı; Havvanur isimli öğrencilerin web programlama, veri tabanı, mobil programlama
dersleri vardır. */

    echo "$ogreciDetay[adi] $ogrenciDetay[soyadi] isimli öğrencinin", 
        $ogrenciDetay["dersler"]["ders1"],
        $ogrenciDetay["dersler"]["ders2"],
        $ogranciDetay["dersler"]["ders3"], " dersleri vardır.";

        echo "<hr>";



    $ogrencıDetayları= array(
        "ögr1" => array(
            "id"        => 1,
            "adi"       => "Havva",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => 20,
            "dersler"   => array(
                "ders1" => "Web Programlama",
                "ders2" => "Veri Tabanı",
                "ders3" => "Mobil Programlama"
        ),
            "sınıf"     => 2,
            "memleket"  => "İzmir"


    ),
    "ögr2" => array(
            "id"        => 1,
            "adi"       => "Havva",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => 20,
            "dersler"   => array(
                "ders1" => "Web Programlama",
                "ders2" => "Veri Tabanı",
                "ders3" => "Mobil Programlama"
        ),
            "sınıf"     => 2,
            "memleket"  => "İzmir"


    ),
    "ögr3" => array(
        "id"        => 1,
        "adi"       => "Havva",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => 20,
        "dersler"   => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
    ),
        "sınıf"     => 2,
        "memleket"  => "İzmir"


),
"ögr4" => array(
    "id"        => 1,
    "adi"       => "Havva",
    "soyadi"    => "Yıldız",
    "bolum"     => "Bilgisayar",
    "yas"       => 20,
    "dersler"   => array(
        "ders1" => "Web Programlama",
        "ders2" => "Veri Tabanı",
        "ders3" => "Mobil Programlama"
),
    "sınıf"     => 2,
    "memleket"  => "İzmir"


),




    )      

    
    
    
    
    
    



?>







    
</body>
</html>