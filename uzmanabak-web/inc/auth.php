<?php 
include '../functions.php';
if(isset($x)){
    echo "don't try";
}
if($_POST['password'] == "" && $_POST['x'] == "update"){
    unset($_POST['password']);
}
$sehir = array(
    '1' =>'Adana',
    '2' =>'Adıyaman',
    '3' =>'Afyonkarahisar',
    '4' =>'Ağrı',
    '5' =>'Amasya',
    '6' =>'Ankara',
    '7' =>'Antalya',
    '8' =>'Artvin',
    '9' =>'Aydın',
    '10' =>'Balıkesir',
    '11' =>'Bilecik',
    '12' =>'Bingöl',
    '13' =>'Bitlis',
    '14' =>'Bolu',
    '15' =>'Burdur',
    '16' =>'Bursa',
    '17' =>'Çanakkale',
    '18' =>'Çankırı',
    '19' =>'Çorum',
    '20' =>'Denizli',
    '21' =>'Diyarbakır',
    '22' =>'Edirne',
    '23' =>'Elâzığ',
    '24' =>'Erzincan',
    '25' =>'Erzurum',
    '26' =>'Eskişehir',
    '27' =>'Gaziantep',
    '28' =>'Giresun',
    '29' =>'Gümüşhane',
    '30' =>'Hakkari',
    '31' =>'Hatay',
    '32' =>'Isparta',
    '33' =>'Mersin',
    '34' =>'İstanbul',
    '35' =>'İzmir',
    '36' =>'Kars',
    '37' =>'Kastamonu',
    '38' =>'Kayseri',
    '39' =>'Kırklareli',
    '40' =>'Kırşehir',
    '41' =>'Kocaeli',
    '42' =>'Konya',
    '43' =>'Kütahya',
    '44' =>'Malatya',
    '45' =>'Manisa',
    '46' =>'Kahramanmaraş',
    '47' =>'Mardin',
    '48' =>'Muğla',
    '49' =>'Muş',
    '50' =>'Nevşehir',
    '51' =>'Niğde',
    '52' =>'Ordu',
    '53' =>'Rize',
    '54' =>'Sakarya',
    '55' =>'Samsun',
    '56' =>'Siirt',
    '57' =>'Sinop',
    '58' =>'Sivas',
    '59' =>'Tekirdağ',
    '60' =>'Tokat',
    '61' =>'Trabzon',
    '62' =>'Tunceli',
    '63' =>'Şanlıurfa',
    '64' =>'Uşak',
    '65' =>'Van',
    '66' =>'Yozgat',
    '67' =>'Zonguldak',
    '68' =>'Aksaray',
    '69' =>'Bayburt',
    '70' =>'Karaman',
    '71' =>'Kırıkkale',
    '72' =>'Batman',
    '73' =>'Şırnak',
    '74' =>'Bartın',
    '75' =>'Ardahan',
    '76' =>'Iğdır',
    '77' =>'Yalova',
    '78' =>'Karabük',
    '79' =>'Kilis',
    '80' =>'Osmaniye',
    '81' =>'Düzce');
$_POST["sectorCity"] = array($sehir[$_POST["sectorCity"]]);

$data = json_encode($_POST);


print_r($data);
switch($_POST['x']){
    case "register": 
        $s =  curlJson('ustasiyapsin-api.herokuapp.com/api/auth/register', json_decode($data), 'POST');
        print_r($s);
        if($s['message'] == "Register Successfully"){
         
            header('Location: ../auth/giris.php?d=1');

        }else{
            header('Location: ../auth/giris.php?d=2');

            }
        break;
     case "registerbus": 
        $s =  curlJson('ustasiyapsin-api.herokuapp.com/api/auth/register-business', json_decode($data), 'POST');
        print_r($s);
        if($s['message'] == "Register Successfully"){
         
            header('Location: ../auth/giris.php?d=1');

        }else{
            header('Location: ../auth/giris.php?d=2');

            }
        break;
    case "login": 
        $giris =  curlJson('ustasiyapsin-api.herokuapp.com/api/auth/login', json_decode($data), 'POST');
     if(isset($giris['success'])){

     
        if($giris['success'] == 1){
            $_SESSION['id'] = $giris['data']['_id'];
            $_SESSION['accessToken'] = $giris['data']['accessToken'];
            $_SESSION['name'] = $giris['data']['name'];
            $_SESSION['login'] = true;
            header('Location: ../index.php');

        }else{
            header('Location: ../auth/giris.php?d=2');
        }}else{
            header('Location: ../auth/giris.php?d=2');
        }
        break;
    
    case "update": 
        if($_SESSION['id'] == $_POST['_id']){

        $gunc =  curlJson('ustasiyapsin-api.herokuapp.com/api/user/'.$_POST['_id'], json_decode($data), 'PUT');
     if(isset($gunc['_id'])){
            $_SESSION['id'] = $gunc['_id'];
            $_SESSION['name'] = $gunc['name'];
            $_SESSION['login'] = true;
            header('Location: ../profilduzenle.php?d=1');

}else{
            header('Location: ../profilduzenle.php?d=2');
        }}else{
            echo "HACKER?";
        }
        break;
}
if($_GET['is'] == "cikis"){
    session_destroy();
    header('Location: ../index.php');

}
?>