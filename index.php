<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .form{
            margin:100px auto;
            border:2px solid rgba(0,0,0,.5);
            border-radius:5px;
            width:50%;
            padding:30px 20px;
            height:auto;
        }
        input,button{
            width:100%;
            display:block;
            height:40px;
            line-height:40px;
            border:1px solid blue;
            margin-bottom:15px;
        }
        button,input[type="submit"]{
            cursor:pointer;
        }
        .form img{
            text-align:center;
        }
        .hata{
            height:50px;
            line-height:50px;
            text-indent:20px;
            border:1px solid red;
            border-radius:4px;
            background-color:rgba(255,0,0,.5);
            width:100%;
        }
    
    </style>
    <title>Document</title>
</head>
<body>
    <div class="form">
        
        <?php 
        
        switch($_GET['adim']){ 
            case 1:
            ?>
            <h3>Kullanıcı adı ve şifre giriniz.</h3>
        <form action="kontrol.php" method="post">
        
            <input type="text" name="kullaniciadi" placeholder="Kullanıcı adı">
            <input type="password" name="parola" placeholder="Parola">
            <input type="submit" name="submit" value="Giriş yap">
        
        </form>
        <?php
            //Hata yazdırma
        if($_GET['hata']=='giris'){
            echo '<div class="hata">Kullanıcı adı şifre hatalı</div>';
        }
        ?>
        <?php break; 

            


        case 2:

            $dogrulama =  rand(100000 , 999999);
        
        ?>
        <h3>QR doğrulama ekranı.</h3><p>Aşağıdaki qr telefonunuzdan okutun ve çıkan kodu aşagıdaki alana girip, doğrulayın.</p>
        <img src="qrcode.php?text=<?php echo $dogrulama; ?>&size=200&padding=10" alt="">
        <form action="kontrol.php" method="post">
            <input type="text" name="qrcode">
            <button type="submit" name="qrsubmit">Doğrula</button>
            <input type="hidden" value="<?php echo $dogrulama; ?>" name="dogrulama">
        </form>
        <?php
            
        ?>
        
        <?php break; 
        case 3:
        ?>
        <h2>İki dogrulamayıda basarılı bir şekilde gectin</h2>
        <?php break;
        default: 
        header("Location:index.php?adim=1");
    } ?>
    <?php 
        //Hata yazdırma
        if($_GET['hata']=='qr'){
            echo '<div class="hata">Qr kodu hatalı</div>';
        }
        ?>
    </div>
</body>
</html>