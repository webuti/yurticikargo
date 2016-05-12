<?php

/**
* Class YurticiKargo
* @author Mustafa Balcı
* @web http://www.madonetr.com
* @mail madonetr@gmail.com
* @date 12 Mayıs 2015
*/

class YurticiKargo {

    private $url = "http://www.yurticikargo.com/_layouts/ArikanliHolding.YurticiKargo.WebSite/ajaxproxy-shipmentservices.aspx/GetShipmentsByDocId";
    private $user_agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36";
	
	public function sorgula($docid, $captha = NULL){
		
		$post['docId'] = $docid;
		$post['captcha'] = $captha;
		
		$header = array(
			"Content-Type:application/json; charset=UTF-8",
			"Host:www.yurticikargo.com",
			"Origin:http://www.yurticikargo.com",
			"Referer:http://www.yurticikargo.com/bilgi-servisleri/sayfalar/kargom-nerede.aspx",
		);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_USERAGENT, $this->user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		$response = curl_exec($ch);
		$response = json_decode($response);
		$info = curl_getinfo($ch);
		
		return (object) [
			'http_code' => $info['http_code'],
			'response' => json_decode($response->d),
		];
		
	}
	
}

$kargo = new YurticiKargo();

$sorgu = $kargo->sorgula("303073736834");
print_r($sorgu);