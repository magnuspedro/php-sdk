<?php

require_once '../Address/Billing.php';
require_once '../Address/Shipping.php';
require_once '../CreditCard.php';
require_once '../Payment.php';
require_once '../Customer.php';
require_once '../CreditInstallment.php';
require_once '../Request/CreditCardRequest.php';
require_once '../CreditCardTransaction.php';

$customer = new Customer();
$customer->setId('1');
$customer->setName('Pedro Magnus');
$customer->setEmail('pmp.magnus@gmail.com');
$customer->setDob('1997-10-03');
$customer->setIpAddress('192.168.10.15');
$customer->setTaxId('1234134141');
$customer->setPhone1('+55 11 12345678');
$customer->setPhone2('+55 11 12345678');
$customer->setCreatedAt('2019-11-25');
$customer->setNew(false);
$customer->setVip(true);

$billing = new Billing();

$billing->setName('Pedro Magnus');
$billing->setAddress('Avenida Paulista');
$billing->setAddress2('124');
$billing->setDistrict('Bela vista');
$billing->setCity('Sorocaba');
$billing->setState('SP');
$billing->setPostalCode('01311000');
$billing->setCountry('BR');
$billing->setPhone('111112222233333');
$billing->setEmail('billing@soulpay.com.br');

$shipping = new Shipping();

$shipping->setName('Pedro Magnus');
$shipping->setAddress('Avenida Paulista');
$shipping->setAddress2('124');
$shipping->setDistrict('Bela vista');
$shipping->setCity('Sorocaba');
$shipping->setState('SP');
$shipping->setPostalCode('01311000');
$shipping->setCountry('BR');
$shipping->setPhone('12345678');
$shipping->setEmail('shipping@soulpay.com.br');

$creditCard = new CreditCard();

$creditCard->setCardHolderName('Pedro Magnus');
$creditCard->setNumber('4620685100802685');
$creditCard->setExpDate('12/2022');
$creditCard->setCvvNumber('420');

$creditInstallment = new CreditInstallment();

$creditInstallment->setNumberOfInstallments(1);
$creditInstallment->setChargeInterest('N');

$payment = new Payment();

$payment->setChargeTotal(120.10);
$payment->setCurrencyCode('BRL');
$payment->setCreditInstallment($creditInstallment);

// $creditCardTransaction = new CreditCardTransaction();
// 
// $creditCardTransaction->setCustomer($customer);
// $creditCardTransaction->setBilling($billing);
// $creditCardTransaction->setShipping($shipping);
// $creditCardTransaction->setCreditCard($creditCard);
// $creditCardTransaction->setPayment($payment);

// $request = new CreditCardRequest('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjEsImlhdCI6MTU3NTkwMzEyOSwiZXhwIjoxNTc4NDk1MTI5fQ.c0g6ynTtZHFSU3qh4bJWy-jea0VnKE4hGBTAs_uhNjY');

echo ('<h1>Object<h1>');
echo ('<pre>' . $creditCardTransaction->toJson() . '</pre>');

echo ('<pre>' . $request->send($creditCardTransaction->toJson()) . '</pre>');

// echo ('<h3> "customer": ' . $customer->toJson() . ',<h3>');
// echo ('<h3> "shipping": ' . $shipping->toJson() . ',<h3>');
// echo ('<h3> "billing": ' . $billing->toJson() . '<h3>');
// echo ('<h3> "creditCard": ' . $creditCard->toJson() . '<h3>');
// echo ('<h3> "payment": ' . $payment->toJson() . '<h3>');
// echo ('<h3> "CREDIT": ' . $creditInstallment->toJson() . '<h3>');
?>