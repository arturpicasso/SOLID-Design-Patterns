<?php

/**
 * Esta classe aceita uma estratégia de pagamento
 * e utiliza essa estratégia para calcular o desconto
 */
class ShoppingCart {
    private $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout($amount) {
        $discount = $this->paymentStrategy->calculateDiscount($amount);
        $totalAmount = $amount - $discount;
        echo "Total após o desconto: $" . $totalAmount;
    }
}
