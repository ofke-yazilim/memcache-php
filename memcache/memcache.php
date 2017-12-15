<?php
/**
 * Description of memcache
 * Php 7.0.23 memcache
 * @author o.kesmez
 */
class _memcache {
    private $memcache;
    //Yapıcı fonksiyonumuzu kullanarak memcache servisine bağlanıyoruz.
    public function __construct() {
        $this->memcache = new Memcache;
        $this->memcache->connect("localhost",11211); 
    }
    
    //Memcache içerisinde tutulacak data ayarlanıyor.
    /*
     * $param time => saniye cinsinden cache süresi
     * $param key  => hangi anahtar değeri ile cache içerisinde tutulacağını belirtir
     * $param value => cache içerisine alınacak olan değeri belirtir.
     */
    public function setData($key,$value=null,$time) {
        $this->memcache->set($key,$value,false,$time);
    }
    
    //Memcache içerisinden data alınıyor
    /*
     * $param key => verilen anahtara ait cache değerini döner.
     */
    public function getData($key) {
        return $this->memcache->get($key);
    }
}
