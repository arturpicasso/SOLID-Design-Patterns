<?php

// Classe concreta que segue a interface
class CreditCardPayment implements PaymentStrategy {
    public function calculateDiscount($amount) {
        // 5% de desconto para pagamentos com cartão de crédito
        return $amount * 0.05;
    }
}