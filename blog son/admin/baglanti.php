<?php

try {
	$baglanti=new PDO('mysql:host=localhost; dbname=blogg; charset=utf8',  'root' , '123456');
	#echo "bağlantı başarılı";
} catch (Exception $e) {
	echo "Hata yaptın :".$e->getMessage();

}


?>