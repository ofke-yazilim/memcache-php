<?php
//memcache class dahil ediliyor.
require_once 'memcache.php';

//memcache nesnesi oluşturduk.
$memcache = new _memcache();

//memcache içerisine alınacak data ayarlandı
$data = array("omer","faruk","kesmez");
$memcache->setData("data",$data,300);//Oluşturduğumuz arrayı 300 saniye boyunca cache içerisine aldık

var_dump($memcache->getData("data"));//Dha önce memcache içerisine alınmış değer ekrana basılıyor.