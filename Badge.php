<?php
function getBadgeService ( string $code_service):array {
    switch ($code_service) {
        case 'Cardio':
            $badgeClass = 'badge badge-cardio';
            break;
        case 'DERMA':
            $badgeClass = 'badge badge-Derma';
            break;
        case 'PEDIATRIE':
            $badgeClass = 'badge badge-Pediatrie';
            break;
        default:
            $badgeClass = 'badge badge-inconue';
            break;
    }
    return ['class' => $badgeClass];
}