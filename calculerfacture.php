<?php
function calculerFacture(int $age, float $tarifBase): float { 
    $total = $tarifBase;
    if ($age > 65) {
        $total = $tarifBase + ($tarifBase * 0.2);
    }
    return $total;
}