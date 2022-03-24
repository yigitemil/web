<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ders-1</title>

</head>

<body>
    <!--  Html Yorum Satırı -->

    <?php
    /* Açıklama satırı Bloğu (Çoklu satır kullanılabilir)   Kısayol: Shift + Option + A
    */

    // Tek satır açıklama için kullanılır.

    /*Kullanılan Komut;
        echo: Ekrana yazdırma işlemi yapar.
            Bu komut içerisinde hyml etiketleri kullanılabilir.
            Çift veya tek tırnak kullanılabilir.
            Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar.
            Nokta operatörü ile birleştirme işlemi yapılabilir.
            Ters slash (\) kaçış karakteridir. Özel ifadelerden önce kullanılır. 
    
    
    */
    
    echo "<h3>Adnan Menderes Üniversitesi</h3>";
    echo "<h4> Aydın Meslek Yükseokulu</h4>";
    echo "Bilgisayar Mühendisliği" . 'Aymes';
    echo "<br>Bilgisayar Mühendisliği" . "<br>" . 'Aymes';

    echo "<hr> <h4> Değişken Tanımlama</h4>";

    echo "<ol
            <li>Değişken isimleri $ ile başlar. </li>
            <li>Değişken isimleri sayısal ifadelerle başlayamaz. </li>
            <li>Değişken isimlerin boşluk kullanılmaz. İki kelime birinci_sinif
            birincisinif birinci-sinif örnbekleri kullanılabilir. </li>
            <li>Değişken isimleri küçük-büyük harfe duyarlıdır. \$sayi != \$Sayi </li>
            <li>Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli. </li>
            <li>Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek
            tırnak (') kullanılabilir. </li>
            <li>Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir. </li>
            <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir. </li>
    
        
    
    
        </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri </h4>"; 
    $İsim = "Ufuk";
    $Soyisim = "EMİL";
    $Gsm = "05324779708";
    
    echo $İsim."<br>";
    echo "$İsim $Soyisim $Gsm";

    /* Uygulama; 
        Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
        Bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız.
    
    */

    $uni= "Adü";
    $myo= "Aymes";
    $ad="Yiğit";
    $soyad="EMİL";
    $numara="123";
    ?>

    <form action="">
        <label for="universite">Üni: </label>
        <input type="text" name="" value="<?php echo $uni; ?>" id="universite" disabled><br>
        
        <label for="myo">Myo;</label>
        <input type="text" name="" value="<?php echo $myo; ?>" id="myo" disabled><br> 

        <label for="ad">Öğrenci Adı;</label>
        <input type="text" name="" value="<?php echo $soyad; ?>" id="ad" disabled><br>

        <label for="soyad">Öğrenci Soyadı;</label>
        <input type="text" name="" value="<?php echo $soyad; ?>" id="soyad" disabled><br>

        <label for="numara">Öğrenci No;</label>
        <input type="text" name="" value="<?php echo $numara; ?>" id="numara" disabled><br>



</body>
</html>