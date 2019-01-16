<!DOCTYPE html>
<html>
    <head>
        <title>Beranda</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/css/style.css">
    </head>

    <body style="background: linear-gradient(135deg, #325adf 0%, #e7530f 100%);">
        <header class="ob">
            <div class="atas">
            <div id="logo"><img style="width: 300px; margin-left: 40px; float: left; border-radius: 50%; margin-top: 100px;" 
                src="<?=base_url()?>asset/pict/nama.jpg" alt="">
            </div>
            
            <nav>
                <ul>
                    <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
                    <li><a href="<?=base_url()?>index.php/welcome/profil"> My Profil </a></li>
                </ul>
            </nav>
            </div>
        </header>

        <h1 align="center" style="color:skyblue; text-align: left; font-size: 10.3mm;
        margin-top: 97px; margin-left: 12px; font-family: sans-serif;"> Welcome to Website <?= $nama_lengkap?> <br>
        Berperilakulah seperti <?= $jenis_kelamin?></h1>

        <p style="font-size: 18px;margin-left: 56px; margin-top: 39px;">    Malang Gowes atau event group bersepeda merupakan salah satu 
        sarana olah raga yang bisa dilakukan siapa saja, event yang digagas oleh pacinta olahraga terutama pencita olahraga sepeda. Event tahunan ini 
        rutin diselenggarakan. Rute yang dipilih pun bermacam-macam.
        </p>
        <img style="width: 823px;margin-left: 518px; margin-top: -312px;" src="<?=base_url()?>asset/pict/back.png" alt="">
    </body>
</html>
