<?php

require_once('PaymentStrategy.php');
require_once('CreditCardPayment.php');
require_once('PayPalPayment.php');
require_once('ShoppingCart.php');

$creditCardPayment = new CreditCardPayment();
$paypalPayment = new PayPalPayment();

$cart1 = new ShoppingCart($creditCardPayment);
$cart2 = new ShoppingCart($paypalPayment);

// Total após o desconto: $95 (5% de desconto)
var_dump($cart1->checkout(100), `\n`);
// Total após o desconto: $90 (10% de desconto)
var_dump($cart2->checkout(100), `\n`);

// Acesse a pasta raiz e execute no terminal
// php index.php

/**
 * Caso seja necessário implementar um novo tipo de pagamento,
 * a classe abstrata (interface) não será modificada, e sim,
 * somente será implementado uma nova classe concreta identificando
 * o novo tipo do pagamento e o novo cálculo do desconto
*/