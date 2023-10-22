<?php

// Classe concreta que segue a interface
class PayPalPayment implements PaymentStrategy {
    public function calculateDiscount($amount) {
        // 10% de desconto para pagamentos com PayPal
        return $amount * 0.10;
    }
}
