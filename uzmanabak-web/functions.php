<?php 
// if is work don't touch nerde ne yazdığımı hatırlamıyorum.
session_start();
$apiUrl = 'https://ustasiyapsin-api.herokuapp.com/api/';


function getJson($api){
    global $apiUrl;
    $response = file_get_contents($apiUrl.$api);
    $response = json_decode($response);
    $response = json_decode(json_encode($response), true);
    return $response;
}

function curlPost($url, $data=NULL, $req = NULL,$headers = NULL) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if(!empty($data)){
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }

    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    if (!empty($req)) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $req);
    }
    $response = curl_exec($ch);

    if (curl_error($ch)) {
        trigger_error('Curl Error:' . curl_error($ch));
    }
    curl_close($ch);
    return $response;
}


function curlJson($url, $data=NULL, $req = NULL, $headers = NULL){
    
    $postdata = json_encode($data);
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    if (!empty($req)) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $req);
    }
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $result;
}
// get all
function city_get_all(){
    return getJson('cities')['data'];
}
function category_get_all(){
    return getJson('category')['data'];
}
function bussines_get_all(){
    return getJson('user/get-business')['data'];
}
function questions_get_all(){
    return getJson('questions')['data'];
}
function user_get_all(){
    return getJson('user')['data'];
}
function service_get_all(){
    return getJson('service')['data'];
}
function demand_get_all(){
    return getJson('demand')['data'];
}
function sector_get_all(){
    return getJson('sector')['data'];
}
// get
function service_get($id){
    return getJson('service/'.$id)['data'];
}
function user_get($id){
    return getJson('user/find/'.$id);
}
function category_get($x){
    return getJson('category')['data'][$x];
}
function service_get_by_cat($x){
    return getJson('service/get-by-cat/'.$x)['data'];
}
function sector_get_by_cat($x){
    return getJson('sector/get-by-category/'.$x)['data'];
}


if(isset($_POST['kayitol'])){ 
// Eğer kayıt ol formu gönderilmişse 
  if(!empty($_POST['kullaniciadi']) && !empty($_POST['sifre']) && !empty($_POST['email']) && !empty($_POST['isim'])){ 
  /* Eğer formda boş bırakılmış bir değer yoksa burası çalışacak */
 
  /* Formdan girilen verileri daha kolay okumak için değişkene alalım */
     $kullanici_adi = $_POST['name']; 
     $sifre         = $_POST['sifre']; 
     $email         = $_POST['email']; 
     $isim          = $_POST['isim']; 
 
  /* Girilen kullanıcı adı veya e-mail ile bir üye kaydı varsa bunu tespit edelim */
        $hesap_kontrolu = $db->from('uyeler')
                             ->where('uye_kullaniciadi', $kullanici_adi)
                             ->or_where('uye_mail', $email)
                             ->first();
   
        if(!$hesap_kontrolu){
            /* Eğer girilen bilgiler ile bir üye varsa kayıt işlemine devam ediyoruz */
            $kayit_ol = $db->insert('uyeler') // Üyeler tablosuna yeni veri ekliyoruz
                           ->set(array( // Verilerimizi buraya gireceğiz.
                               "uye_kullaniciadi" => $kullanici_adi, // Kullanıcı adını yazıyoruz.
                               "uye_mail"         => $email, // Kullanıcı e-postasını yazıyoruz.
                               "uye_sifre"        => md5($sifre), // Şifreyi güvenlik için md5 ile tekrardan şifreliyoruz
                               "uye_isim"         => $isim // Kullanıcının ismini yazıyoruz
                        ));
            if($kayit_ol){ // Eğer kayıt işlemi başarılı olmuşsa
                $islem_mesaji = "Başarıyla kayıt oldunuz!"; // Kullanıcıya işlem durumunu bildirelim
            } else { $islem_mesaji = "Sistemsel bir hata oluştu!"; /* Kayıt işleminde bir hata varsa bildirelim. */ }
        } else { $islem_mesaji = "Bu kullanıcı adı veya e-mail ile başka bir üye var!"; }
    } else { $islem_mesaji = "Lütfen tüm form verilerini doldurun"; /* Boş bırakılan form kutusu varsa hata verdirelim */ }
}
?>