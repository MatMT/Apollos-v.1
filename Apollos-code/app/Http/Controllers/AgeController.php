<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public int $age;

    public function __construct($nacimiento)
    {
        // Edad actual --- 
        $nacimientoInt = strtotime($nacimiento); // Conversión a enteros

        $monthN = date("m", $nacimientoInt); // Extraemos mes 
        $dayN = date("d", $nacimientoInt); // Extraemos día
        $yearN = date("Y", $nacimientoInt); // Extraemos año

        // Fechas actuales
        $monthA = now()->month;
        $dayA = now()->day;
        $yearA = now()->year;

        $age = $yearA - $yearN;

        if ($monthA < $monthN) {
            $age--;
        } else if ($monthA == $monthN) {
            if ($dayA < $dayN) {
                $age--;
            }
        }

        $this->age = $age;

        return $this;
    }
}
