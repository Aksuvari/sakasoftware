<html>
<head>
    <title>Iletisim Sayfasi</title>
    <link href="formstil.css" type="text/css" rel="stylesheet"/>

    <style>
        form {

            color:#950992;
            font-size: 15px;
            border:3px solid solid #950992;
        }


        h3 {
            font-family:Comic Sans MS;
            margin: 20px;
        }


        textarea {
            width: 400px;
            height: 90px;
            max-width: 400px;

        }


        body {
            padding: 40px 100px;

        }


        input, textarea {
            padding: 0px 10px;
            border: 1px solid #950992;
        }

    </style>
</head>
<body>


<form>
    <fieldset>
        <legend><h3>Kisisel Bilgiler:</h3></legend>
        </fielset>

        Isim:
        <input type="text" name="Ýsim">
        <br><br>

        Soyisim:
        <input type="text" name="Soyisim">
        <br><br>

        Dogum Tarihi:
        <input type="date" name="dt" min="1850-01-01" max="2000-01-01">
        <br><br>

        Proje Tipi
        <Select name="Medeni Hal">
            <option value="Null" selected>Seçiniz</option>
            <option value="Evli">Tanıtım</option>
            <option value="Bekar">Mobil Uygulama</option>
            <option value="Boþanmýþ">E-ticaret Uygulamaları</option>
            <option value="Boþanmýþ">Otomasyon Sistemleri</option>
        </select>
        <br><br>

        Cinsiyet:
        <input type="radio" name="C" value="Kadýn" checked> K
        <input type="radio" name="C" value="Erkek"> E
        <br> <br>

        E-mail:
        <input type="email" name="email">
        <br><br>

        Ögrenim Durumu:
        <input type="checkbox" name="e" value="ilköðretim"> Ýlköðretim
        <input type="checkbox" name="e" value="Lise"> Lise
        <input type="checkbox" name="e" value="Lisans"> Lisans
        <input type="checkbox" name="e" value="Yüksek Lisans"> Yüksek Lisans
        <br><br>

        Adres: <br>
        <textarea name="adres"> </textarea>
        <br><br>

        Mesajiniz:<br>
        <textarea name="mesaj"> </textarea>
        <br><br>

        <input type="submit" value="Gönder">



</form>
</body>
</html>
