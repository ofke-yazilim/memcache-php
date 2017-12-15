# memcache-php
Php 7.0.23 Memcache Wamp Server  Windows
<br>
<strong>
  <em>Uygulama 7.4 Netbeans derleyicisi kullanılarak yazılmıştır. Php 7.0.23 programlama dili kodlanmıştır.</em>
</strong>
<br>
<br>
<h1>Windows Üzerine Memcache Kurulumu</h1>
<ul>
<li>
  https://github.com/nono303/PHP7-memcache-dll adresinden dll dosyamızı indirelim.
  İndirdiğimiz dll dosyamızın kullanmış olduğumuz windows makinaya uygun olmasına dikkat edilim. dll dosyamızıi
  php_memcache.dll şeklinde isimlendirelim.
</li>
<li>
  C:\wamp64\bin\php\php7.0.23\ext adresini takip ederk dll dosyamızı kopyalayalım.
</li>
<li>
  C:\wamp64\bin\php\php7.0.23\php.ini dosyası açılarak uygun yere extension=php_memcache.dll  yazılırak kayıt edilir.
</li>
<li>
  https://commaster.net/content/installing-memcached-windows adresinden işletim sistemimize uygun exe indirlir ve çalıştırılır 
  ve sürekli çalışır vaziyette bırakılır.
</li>
</ul>

<h1>Memcahe Fonksiyonları ve Kullanımı</h1>
<ul>
  <li>Örnek fonksiyonları incelmek için : https://github.com/ofke-yazilim/memcache-php/blob/master/memcache/memcache.php</li>
  <li>Örnek kullanım için : https://github.com/ofke-yazilim/memcache-php/blob/master/memcache/index.php</li>
</ul>
