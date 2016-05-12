Kargo takip numarasýyla kargo hakkýnda bilgi alabileceðiniz bir sýnýf.

Bunu neden yaptým?
- Belki bir gün birisinin iþine yarar diye.

Nasýl çalýþýyor?
- Yurtiçi Kargo'nun selfservis sayfasýndan bilgiler çekiliyor.

Örnekler ve Rehber
- Sýnýf dosyamýzý sayfamýza ekliyoruz.

> require "YurticiKargo.php';

- Sýnýfýmýzý baþlatýyoruz.

> $kargo = new YurticiKargo();

- Kargo takip numaramýzý yazýyoruz ve kargo bilgisini yazdýrýyoruz.

> $sorgu = $kargo->sorgu("kargo takip no"); </br>
> print_r($sorgu);