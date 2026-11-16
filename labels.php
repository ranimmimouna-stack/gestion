<?php
function getLibelleUrgence (string $code): string {
    switch ($code) {
        case 'Rouge':
            $libelle = 'Urgence absolue';
            break;
        case 'Orange':
            $libelle = 'Urgence relative';
            break;
        case 'Vert':
            $libelle = 'Consultation normale';
            break;
        default:
            $libelle = 'Visite';
            break;
    }
    return $libelle;
}