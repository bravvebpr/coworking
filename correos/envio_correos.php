<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);
$env = mysql_query("SELECT correo, localidad FROM  `envios` WHERE  `correo`='{$_POST['tuemail']}' and `localidad`='{$_POST['localidad']}'");
$u=mysql_fetch_array($env);
if($u['correo']==""){
    mysql_query("INSERT INTO  `envios` (`correo`, `numeros_envio`, `localidad`) VALUES ('{$_POST['tuemail']}', '1', '{$_POST['localidad']}')");
   }
else{
    $n_env = mysql_query("SELECT id, numeros_envio FROM envios where correo='{$_POST['tuemail']}' and `localidad`='{$_POST['localidad']}'");
    $n_e=mysql_fetch_array($n_env);
    $n=$n_e['numeros_envio'];
    $n++;
    mysql_query("UPDATE  `envios` SET  `numeros_envio` =  $n WHERE  `id` ={$n_e['id']}");
}
$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$longitudCadena=strlen($cadena);
$pass = "";
$longitudPass=10;
for($i=1 ; $i<=$longitudPass ; $i++){
$pos=rand(0,$longitudCadena-1);
$codigo_cup .= substr($cadena,$pos,1);}
$datos = mysql_query("SELECT nombre, tlf, direccion, descripcion, imagen, url FROM centros where id='{$_POST['localidad']}'");

$filae = mysql_fetch_array($datos);

mysql_close($conexion);
if($_POST['img_select']=="correo2"){require './correo2.php';$archivo = $cartel2;}
if($_POST['img_select']=="correo3"){require './correo4.php';$archivo = $cartel2;}
if($_POST['img_select']=="correo4"){require './correo3.php';$archivo = $cartel2;}
if($_POST['img_select']=="correo5"){require './correo5.php';$archivo = $cartel2;}
$uniqueid = uniqid('np');
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";
$message = "";
$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
$message .= "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ligula tincidunt, sodales elit non, tempus purus. Quisque eget purus congue, luctus justo sit amet, sagittis metus. Fusce cursus, tortor in lacinia vehicula, arcu erat viverra metus, id ultricies ante sapien at dolor. Nullam et libero varius, mattis quam nec, rutrum orci. In ac ipsum dapibus est tempor pharetra vitae sit amet magna. Phasellus quis mauris sollicitudin, posuere enim accumsan, varius arcu. Mauris gravida est vel ligula suscipit fringilla. Aliquam erat volutpat. Nunc viverra tincidunt orci ut tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse ut justo eget urna ultricies tempor. Nam sit amet faucibus mauris. Aenean interdum mauris purus, tincidunt porta nisi euismod sed.
                Sed sollicitudin vestibulum est eu tincidunt. Aliquam in ante rutrum, pulvinar lorem at, ultrices sem. Morbi tempor volutpat convallis. Aliquam erat volutpat. Praesent dapibus dui nec commodo volutpat. Integer ullamcorper a dolor ac scelerisque. Curabitur vehicula nisi fermentum nulla eleifend, sed ullamcorper lacus porttitor. Sed neque nulla, accumsan at feugiat ut, feugiat a massa. Duis ac dignissim felis. Nam vel faucibus metus.
                Vivamus blandit egestas adipiscing. Morbi aliquet eu enim eget condimentum. Nam et bibendum tellus. Curabitur faucibus lectus at enim feugiat placerat. Mauris mattis ligula velit, et volutpat velit facilisis et. In vel massa convallis, commodo nibh non, porttitor orci. Vestibulum vestibulum felis at leo sodales ultricies. Mauris rhoncus vehicula ornare. Donec est ipsum, porta ac neque quis, ornare imperdiet mi. Nulla sit amet vehicula eros. Donec iaculis ante et risus blandit, ut euismod ligula tincidunt. Donec condimentum libero sit amet pharetra condimentum. Praesent eget tortor gravida, rutrum turpis vel, consectetur metus. Sed laoreet erat ante. Mauris eget elit urna.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam ultricies molestie magna eu condimentum. Suspendisse sagittis dignissim felis a facilisis. In a ipsum arcu. Integer non auctor est, sed consequat turpis. Aliquam erat volutpat. Proin non laoreet sapien. Donec vitae posuere quam. Nullam sollicitudin turpis odio, quis elementum leo pretium vel. Etiam accumsan sodales sapien eu rhoncus. Maecenas sit amet sapien nec diam hendrerit congue eu at enim. Maecenas tempor egestas arcu, a ultricies eros dignissim sed. Praesent tristique orci libero, quis dignissim ante interdum id. Nam eu malesuada ipsum. Suspendisse dictum ipsum ac arcu venenatis fringilla. In id quam ultricies nulla porttitor dictum.
                Vivamus rhoncus diam et sagittis vulputate. Maecenas nisl lectus, pharetra ut venenatis sit amet, fringilla sodales elit. Nunc eget vulputate turpis, a mollis est. Nullam rhoncus ac ipsum sed pharetra. Fusce in risus laoreet nulla mattis mollis at a nunc. Maecenas egestas ultrices tellus nec ornare. Duis tempor tellus venenatis urna vulputate, at venenatis odio mollis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ligula tincidunt, sodales elit non, tempus purus. Quisque eget purus congue, luctus justo sit amet, sagittis metus. Fusce cursus, tortor in lacinia vehicula, arcu erat viverra metus, id ultricies ante sapien at dolor. Nullam et libero varius, mattis quam nec, rutrum orci. In ac ipsum dapibus est tempor pharetra vitae sit amet magna. Phasellus quis mauris sollicitudin, posuere enim accumsan, varius arcu. Mauris gravida est vel ligula suscipit fringilla. Aliquam erat volutpat. Nunc viverra tincidunt orci ut tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse ut justo eget urna ultricies tempor. Nam sit amet faucibus mauris. Aenean interdum mauris purus, tincidunt porta nisi euismod sed.
                Sed sollicitudin vestibulum est eu tincidunt. Aliquam in ante rutrum, pulvinar lorem at, ultrices sem. Morbi tempor volutpat convallis. Aliquam erat volutpat. Praesent dapibus dui nec commodo volutpat. Integer ullamcorper a dolor ac scelerisque. Curabitur vehicula nisi fermentum nulla eleifend, sed ullamcorper lacus porttitor. Sed neque nulla, accumsan at feugiat ut, feugiat a massa. Duis ac dignissim felis. Nam vel faucibus metus.
                Vivamus blandit egestas adipiscing. Morbi aliquet eu enim eget condimentum. Nam et bibendum tellus. Curabitur faucibus lectus at enim feugiat placerat. Mauris mattis ligula velit, et volutpat velit facilisis et. In vel massa convallis, commodo nibh non, porttitor orci. Vestibulum vestibulum felis at leo sodales ultricies. Mauris rhoncus vehicula ornare. Donec est ipsum, porta ac neque quis, ornare imperdiet mi. Nulla sit amet vehicula eros. Donec iaculis ante et risus blandit, ut euismod ligula tincidunt. Donec condimentum libero sit amet pharetra condimentum. Praesent eget tortor gravida, rutrum turpis vel, consectetur metus. Sed laoreet erat ante. Mauris eget elit urna.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam ultricies molestie magna eu condimentum. Suspendisse sagittis dignissim felis a facilisis. In a ipsum arcu. Integer non auctor est, sed consequat turpis. Aliquam erat volutpat. Proin non laoreet sapien. Donec vitae posuere quam. Nullam sollicitudin turpis odio, quis elementum leo pretium vel. Etiam accumsan sodales sapien eu rhoncus. Maecenas sit amet sapien nec diam hendrerit congue eu at enim. Maecenas tempor egestas arcu, a ultricies eros dignissim sed. Praesent tristique orci libero, quis dignissim ante interdum id. Nam eu malesuada ipsum. Suspendisse dictum ipsum ac arcu venenatis fringilla. In id quam ultricies nulla porttitor dictum.
                Vivamus rhoncus diam et sagittis vulputate. Maecenas nisl lectus, pharetra ut venenatis sit amet, fringilla sodales elit. Nunc eget vulputate turpis, a mollis est. Nullam rhoncus ac ipsum sed pharetra. Fusce in risus laoreet nulla mattis mollis at a nunc. Maecenas egestas ultrices tellus nec ornare. Duis tempor tellus venenatis urna vulputate, at venenatis odio mollis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae ligula tincidunt, sodales elit non, tempus purus. Quisque eget purus congue, luctus justo sit amet, sagittis metus. Fusce cursus, tortor in lacinia vehicula, arcu erat viverra metus, id ultricies ante sapien at dolor. Nullam et libero varius, mattis quam nec, rutrum orci. In ac ipsum dapibus est tempor pharetra vitae sit amet magna. Phasellus quis mauris sollicitudin, posuere enim accumsan, varius arcu. Mauris gravida est vel ligula suscipit fringilla. Aliquam erat volutpat. Nunc viverra tincidunt orci ut tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse ut justo eget urna ultricies tempor. Nam sit amet faucibus mauris. Aenean interdum mauris purus, tincidunt porta nisi euismod sed.
                Sed sollicitudin vestibulum est eu tincidunt. Aliquam in ante rutrum, pulvinar lorem at, ultrices sem. Morbi tempor volutpat convallis. Aliquam erat volutpat. Praesent dapibus dui nec commodo volutpat. Integer ullamcorper a dolor ac scelerisque. Curabitur vehicula nisi fermentum nulla eleifend, sed ullamcorper lacus porttitor. Sed neque nulla, accumsan at feugiat ut, feugiat a massa. Duis ac dignissim felis. Nam vel faucibus metus.
                Vivamus blandit egestas adipiscing. Morbi aliquet eu enim eget condimentum. Nam et bibendum tellus. Curabitur faucibus lectus at enim feugiat placerat. Mauris mattis ligula velit, et volutpat velit facilisis et. In vel massa convallis, commodo nibh non, porttitor orci. Vestibulum vestibulum felis at leo sodales ultricies. Mauris rhoncus vehicula ornare. Donec est ipsum, porta ac neque quis, ornare imperdiet mi. Nulla sit amet vehicula eros. Donec iaculis ante et risus blandit, ut euismod ligula tincidunt. Donec condimentum libero sit amet pharetra condimentum. Praesent eget tortor gravida, rutrum turpis vel, consectetur metus. Sed laoreet erat ante. Mauris eget elit urna.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam ultricies molestie magna eu condimentum. Suspendisse sagittis dignissim felis a facilisis. In a ipsum arcu. Integer non auctor est, sed consequat turpis. Aliquam erat volutpat. Proin non laoreet sapien. Donec vitae posuere quam. Nullam sollicitudin turpis odio, quis elementum leo pretium vel. Etiam accumsan sodales sapien eu rhoncus. Maecenas sit amet sapien nec diam hendrerit congue eu at enim. Maecenas tempor egestas arcu, a ultricies eros dignissim sed. Praesent tristique orci libero, quis dignissim ante interdum id. Nam eu malesuada ipsum. Suspendisse dictum ipsum ac arcu venenatis fringilla. In id quam ultricies nulla porttitor dictum.
                Vivamus rhoncus diam et sagittis vulputate. Maecenas nisl lectus, pharetra ut venenatis sit amet, fringilla sodales elit. Nunc eget vulputate turpis, a mollis est. Nullam rhoncus ac ipsum sed pharetra. Fusce in risus laoreet nulla mattis mollis at a nunc. Maecenas egestas ultrices tellus nec ornare. Duis tempor tellus venenatis urna vulputate, at venenatis odio mollis.";
$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
$message .= $archivo;
$message .= "\r\n\r\n--" . $uniqueid . "--";
$headers .= "From: info@alfadentalteam.es <info@alfadentalteam.es>\r\n";
$mail = $_POST['correo'];
$asunto = 'co-working.me este es el asunto';
if (mail($mail, $asunto, $message, $headers)){
    header('Location: ../email_correcto.php');
}
else
    header('Location: ../email_incorrecto.php');