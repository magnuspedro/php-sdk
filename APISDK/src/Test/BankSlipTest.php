<?php 
    require_once '../Address/Billing.php';
    require_once '../Customer.php';
    require_once '../BankSlip.php';
    require_once '../Payment.php';
    require_once '../BankSlipTransaction.php';
    require_once '../Request/BankSlipRequest.php';

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

    $customer = new Customer();

    $customer->setName('Victor');
    $customer->setTaxId('64532787693');

    $bankSlip = new BankSlip();

    $bankSlip->setExpirationDate('2022-12-25');
    $bankSlip->setInstructions('teste API');

    $payment = new Payment();
    $payment->setChargeTotal(1.00);
    $payment->setCurrencyCode('BRL');

    $bankSlipTransaction = new BankSlipTransaction();

    $bankSlipTransaction->setCustomer($customer);
    $bankSlipTransaction->setBilling($billing);
    $bankSlipTransaction->setBankSlip($bankSlip);
    $bankSlipTransaction->setPayment($payment);

    $bankSlipRequest = new BankSlipRequest('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU3NjA3Mzc0MiwiZXhwIjoxNTc4NjY1NzQyfQ.45tr4BlNhzRQQc1nLw9C6kUqMpwS1WxdYptSIBmHtE4');

    echo ('<h1>Object<h1>');
    echo('<pre>' . json_encode($bankSlipTransaction) . '</pre>');
    // echo ('<pre>' . $bankSlipRequest->send(json_encode($bankSlipTransaction)) . '</pre>');
    echo ('<pre>' . $bankSlipRequest->get(251) . '</pre>');
?>