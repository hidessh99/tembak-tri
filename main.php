system ("apt-get update -y");
system ("apt-get upgrade -y");
system ("clear");
echo @color("nevy","\n╔════════════════•ೋೋ•════════════════╗\n║");
echo @color("red","         TEMBAK PAKET THREE");
echo @color("nevy","         ║\n║");
echo @color("green","              L4 EROOR");
echo @color("nevy","              ║\n║");
echo @color("white","               KMB.iD");
echo @color("nevy","               ║\n║");
echo @color("yellow"," Jangan lupa isi pulsa dulu ya !!!!");
echo @color("nevy"," ║");
echo @color("nevy","\n╚════════════════•ೋೋ•════════════════╝\n");
echo @color('blue', "  CREDITS :");
echo @color('white', " 🙏THANKS to ALL AUTHORS🙏\n");
echo @color('green', "\t    ❤️GOD BLESS YOU ALL❤️ \n");
echo @color('nevy', "══════════════════════════════════════\n");
echo @color('purple',"\n[⚡] NOMOR TRI\t\t: ");
$nomor = trim(fgets(STDIN));
$login = login($nomor);
echo @color('purple', "[⚡] OTP (Cek Sms)\t: ");
$otp = trim(fgets(STDIN));
$login = otplogin($nomor,$otp);
if (strpos(json_encode($login), '"status":true')) {
	$secret = $login['secretKey'];
	$plan = $login['callPlan'];
    $nomor = $login['msisdn'];
    $profil = profil($nomor,$plan,$secret);
    $balance = $profil['creditBalance'];
    $aktif = $profil['activeUntil'];
    $sisakuota = $profil['sumOfInternet'];
    $poin = $profil['stotalPoin'];

	echo @color('purple', "[⚡] PULSA\t\t: ");
	echo @color('blue', "$balance\n");
	echo @color('purple', "[⚡] MASA AKTIF\t\t: ");
	echo @color('blue', "$aktif\n");
    echo @color('purple', "[⚡] SISA KUOTA\t\t: ");
    echo @color('blue', "$sisakuota\n");
    echo @color('purple', "[⚡] POINT\t\t: ");
    echo @color('blue', "$poin\n");
    cek:
    echo @color("nevy", "\n ╔════════════════꧁ঔৣ☬⫸༒•ೋೋ•༒⫷☬ঔৣ꧂════════════════╗");
    echo @color('nevy', "\n ║ ");
    echo @color('purple'," [ v 2 ] ");
    echo @color('green'," MENU PAKET  ");
    echo @color('white'," { tester }:");
    echo @color('nevy',"           ║\n");
    echo @color("nevy", " ╠══════════════════☬⫸༒•ೋೋ•༒⫷☬══════════════════╝");
    echo @color('yellow', "\n ║
 ╠[ 1 ] 5GB 3 Hari [New]\t: Rp 5.000.-
 ╠[ 2 ] 7GB 7 Hari [New]\t: Rp 10.000.-
 ╠[ 3 ] 10GB 7 Hari [+Sosmed]\t: Rp 10.000.-
 ╠[ 4 ] 10GB 30 Hari [NEW]\t: Rp 25.000,-
 ╠[ 5 ] 30GB 30 Hari [NEW]\t: Rp 25.000.-
 ╠[ 6 ] 60GB 30 Hari [NEW]\t: Rp 35.000.-
 ╠[ 7 ] 25GB 30 Hari [NEW]\t: Rp 50.000,-
 ╠[ 8 ] 33GB 30 Hari [KiLaT]\t: Rp 50.000.-
 ╠[ 9 ] 35GB 30 Hari [NEW]\t: Rp 50.000.-
 ╠[10 ] 45GB 30 Hari [NEW]\t: Rp 70.000,-
 ╠[11 ] 70GB 30 Hari [NEW]\t: Rp 100.000,-
 ╠[12 ] 70GB 30 Hari [NEW]\t: Rp 100.000,-
 ╠[13 ] 130GB 30 Hari [HOT]\t: Rp 150.000.-\n ║\n ║");
    
    echo @color('nevy', "\n ╚══════❨ PILIH PAKET ❩════╾꧁ঔৣ☬⫸ : ");
    $pilih = trim(fgets(STDIN));
    switch ($pilih) {
            case '1':
            $prodid = '28892';
            break;
            case '2':
            $prodid = '28894';
            break;
            case '3':
            $prodid = '28879';
            break;
            case '4':
            $prodid = '27382';
            break;
            case '5':
            $prodid = '28897';
            break;
            case '6':
            $prodid = '28899';
            break;
            case '7':
            $prodid = '27517';
            break;
            case '8':
            $prodid = '30876';
            break;
            case '9':
            $prodid = '29690';
            break;
            case '10':
            $prodid = '27523';
            break;
            case '11':
            $prodid = '30576';
            break;
            case '12':
            $prodid = '30480';
            break;
            case '13':
            $prodid = '28131';
            break;
            case '14':
            $prodid = '';
            break;
            case '15':
            $prodid = 'x';
            break;
            case '16':
            $prodid = 'x';
            break;
            case '17':
            $prodid = 'x';
            break;
            case '18':
            $prodid = 'x';
            break;
            case '19':
            $prodid = 'x';
            break;
            case '20':
            $ptodid = 'x';
            break;
            
        
        default:
            echo @color('red', "\r\n[❔] PILIH PAKET TERLEBIH DAHULU ❕❕❕\n");
            goto cek;
            break;
    }
    $cek = cek($prodid);
    $name = $cek['product']['productName'];
    $price = $cek['product']['productPrice'];
    $deskripsi = $cek['product']['productDescription'];
    echo @color('purple', "\nNAMA PAKET\t: ");
    echo @color('green', "$name\n");
    echo @color('purple', "HARGA\t\t: ");
    echo @color('yellow', "$price\n");
    echo @color('purple', "DESKRIPSI\t: ");
    echo @color('white', "\n$deskripsi\n");
    echo @color('nevy', "\n╚══════❨ LANJUTKAN ? ❩══꧁ঔৣ☬⫸ (Y/N) : ");
    $aa = trim(fgets(STDIN));
    if(strtolower($aa) !== 'y') {
        goto cek;
    }
    $beli = beli($nomor,$plan,$secret,$prodid);
    if ($beli['status'] == true) {
        echo @color('green', "\r\n╚══════❨ SUKSES ❩══꧁ঔৣ☬⫸༒Cek SMS༒⫷☬ঔৣ꧂\n\n");
    } else {
        echo @color('red', "\r\n╚══════❨ GAGAL ! ❩══꧁ঔৣ☬⫸༒Coba yang Lain༒⫷☬ঔৣ꧂\n\n");
    }


} else {
    echo @color('red', $login['message']."\n");
    
}

function login($nomor){
	$host = "bimaplus.tri.co.id";        
    $data = '{"imei":"Android 93488a982824b403","language":1,"msisdn":"'.$nomor.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/otp-request', $data);
        return $ceknom;
}
function otplogin($nomor,$otp){
	$host = "bimaplus.tri.co.id";        
    $data = '{"deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","msisdn":"'.$nomor.'","otp":"'.$otp.'"}';
    $ceknom = rekuest($host,"POST",'/api/v1/login/login-with-otp', $data);
        return $ceknom;
}
function profil($nomor,$plan,$secret){
    $host = "bimaplus.tri.co.id";        
    $data = '{"callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"msisdn":"'.$nomor.'","page":1,"secretKey":"'.$secret.'","subscriberType":"Prepaid"}';
    $ceknom = rekuest($host,"POST",'/api/v1/homescreen/profile', $data);
        return $ceknom;
}

function cek($prodid){
	$host = "my.tri.co.id";        
    $data = '{"imei":"WebSelfcare","language":"","callPlan":"","msisdn":"","secretKey":"","subscriberType":"","productId":"'.$prodid.'"}';
    $ceknom = rekuest($host,"POST",'/apibima/product/product-detail', $data);
        return $ceknom;
}

function beli($nomor,$plan,$secret,$prodid){
    $host = "bimaplus.tri.co.id";        
    $data = '{"addonMenuCategory":"","addonMenuSubCategory":"","balance":"","callPlan":"'.$plan.'","deviceManufactur":"Samsung","deviceModel":"SMG991B","deviceOs":"Android","imei":"Android 93488a982824b403","language":0,"menuCategory":"3","menuCategoryName":"TriProduct","menuIdSource":"","menuSubCategory":"","menuSubCategoryName":"","msisdn":"'.$nomor.'","paymentMethod":"00","productAddOnId":"","productId":"'.$prodid.'","secretKey":"'.$secret.'","servicePlan":"Default","sms":true,"subscriberType":"Prepaid","totalProductPrice":"","utm":"","utmCampaign":"","utmContent":"","utmMedium":"","utmSource":"","utmTerm":"","vendorId":"11"}';
    $ceknom = rekuest($host,"POST",'/api/v1/purchase/purchase-product', $data);
        return $ceknom;
}

function rekuest($host, $method, $url, $data = null){ 
        $headers[] = 'Host: '.$host;
		$headers[] = 'App-Version: 4.2.6';
        $headers[] = 'Content-Type: application/json; charset=UTF-8';
        $headers[] = 'User-Agent: okhttp/4.9.0';
        
        $c = curl_init("https://".$host.$url);  
        switch ($method){
            case "GET":
            curl_setopt($c, CURLOPT_POST, false);
            break;
            case "POST":               
            curl_setopt($c, CURLOPT_POST, true);
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
            case "PUT":               
            curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($c, CURLOPT_POSTFIELDS, $data);
            break;
        }
        
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($c, CURLOPT_TIMEOUT, 20);
        $response = curl_exec($c);
        $httpcode = curl_getinfo($c);
        if (!$httpcode){
            return false;
        }
        else {
            $headers = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
            $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        }
        
        curl_close($c);
        $json = json_decode($body, true);
        return $json;
    }


function color($color = "default" , $text = "")
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
