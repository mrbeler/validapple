<?php

$banner = "\e[36;1m                                                                                 
                                                                                 
           #         ######   
           #    #             
  ######   #    #  ########## 
           #    #  #        # 
           #######        ##  
##########      #       ##    
                #     ##      
                              
                                                                                 
[#] Apple Valid Mail [#]    
                                   
Coded by : Anda                  
Team     : Phobia}{Ploit                   
Github   : https//github.com/mrbeler/\n\n\e[0;1m";
sleep(3);
echo $banner;
sleep(2);
echo "Masukan List : ";
$file = trim(fgets(STDIN));
echo "Masukan Token: ";
$token = trim(fgets(STDIN));
$get = file_get_contents($file);
echo "\n\n[+] RESULT [+]\n";

if(empty($get)) {
	echo "File ".$file." tidak ada\n";
	}else{
		$exp = explode("\n", $get);
for ($i=0; $i <= count($exp) - 1; $i++) {
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://0.tcp.ngrok.io:14044/api.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "email=".$exp[$i]."&token=".$token);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 6.0.1; ASUS_X00AD Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36");
	$gas = curl_exec($ch);
	curl_close($ch);
	
	echo $i+1 .". ".$gas;
	
	
	
	}
}