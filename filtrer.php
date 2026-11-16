<?php
function filtrerUrgence(array $patients,string $urgence):array{
    return array_filter ($patients, function($patient) use ($urgence){
        return $patient['urgence'] === $urgence;
    });
}