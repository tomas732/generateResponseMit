<?php
include('./AESCrypto.php'); 

$key =  $_POST['key'];
$order = $_POST['orden'];
$siebel = $_POST['siebel'];
$response = $_POST['response'];
$foliopago = $_POST['foliocpagos'];
$refecence = $_POST['reference'];

$ref = '';
//echo $order;
if(!empty($order) && !empty($siebel)){
  if(!empty($refecence) && strpos($refecence,'-'.$order.'-') !==false && strpos($refecence,'-'.$siebel.'-') !==false)
  $ref = $refecence;
  else
	$ref = 'SFVE-'.$order.'-'.$siebel;
}
//echo $ref;
if(empty($key)){
$key = '5dcc67393750523cd165f17e1efadd21';
}

$documentoXML = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<CENTEROFPAYMENTS>
  <reference>'.$ref.'</reference>
  <response>'.$response.'</response>
  <foliocpagos>'.$foliopago.'</foliocpagos>
  <auth>473347</auth>
  <cd_response>0C</cd_response>
  <cd_error/>
  <nb_error/>
  <time>17:38:40</time>
  <date>27/07/2016</date>
  <nb_company>SANDBOX MIT</nb_company>
  <nb_merchant>1234567 WEBPAYPLUS</nb_merchant>
  <cc_type>CREDITO/BANCO MIT/Visa</cc_type>
  <tp_operation>VENTA</tp_operation>
  <cc_name/>
  <cc_number>1234</cc_number>
  <amount>400.00</amount>
  <id_url>SNDBX001</id_url>
  <email>cliente@correo.com</email>
  <cc_mask>545454XXXXXX1234</cc_mask>
  <datos_adicionales>
    <data id="1" display="true">
      <label>Talla</label>
      <value>Grande</value>
    </data>
    <data id="2" display="false">
      <label>Color</label>
      <value>Azul</value>
    </data>
  </datos_adicionales>
</CENTEROFPAYMENTS>';


$encryptedString = AESCrypto::encriptar($documentoXML, $key); 

echo 'strResponse='.$encryptedString;

?>