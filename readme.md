Kargo takip numarasıyla kargo hakkında bilgi alabileceğiniz bir sınıf.

Bunu neden yaptım?
- Belki bir gün birisinin işine yarar diye.

Nasıl çalışıyor?
- Yurtiçi Kargo'nun selfservis sayfasından bilgiler çekiliyor.

Örnekler ve Rehber
- Sınıf dosyamızı sayfamıza ekliyoruz.

> require "YurticiKargo.php';

- Sınıfımızı başlatıyoruz.

> $kargo = new YurticiKargo();

- Kargo takip numaramızı yazıyoruz ve kargo bilgisini yazdırıyoruz.

> $sorgu = $kargo->sorgu("kargo takip no"); </br>
> print_r($sorgu);