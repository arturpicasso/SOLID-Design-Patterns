<?php

interface PaymentStrategy {
    public function calculateDiscount($amount);
}
