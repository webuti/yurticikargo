Kargo takip numaras�yla kargo hakk�nda bilgi alabilece�iniz bir s�n�f.

Bunu neden yapt�m?
- Belki bir g�n birisinin i�ine yarar diye.

Nas�l �al���yor?
- Yurti�i Kargo'nun selfservis sayfas�ndan bilgiler �ekiliyor.

�rnekler ve Rehber
- S�n�f dosyam�z� sayfam�za ekliyoruz.

> require "YurticiKargo.php';

- S�n�f�m�z� ba�lat�yoruz.

> $kargo = new YurticiKargo();

- Kargo takip numaram�z� yaz�yoruz ve kargo bilgisini yazd�r�yoruz.

> $sorgu = $kargo->sorgu("kargo takip no"); </br>
> print_r($sorgu);