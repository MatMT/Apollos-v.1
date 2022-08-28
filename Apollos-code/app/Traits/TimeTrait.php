<?php

namespace App\Traits;

trait TimeTrait
{
    public function TimeTotal($time)
    {
        $segundos = $time;

        $minutos = $segundos / 60;
        $horas = floor($minutos / 60);
        $minutos2 = $minutos % 60;
        $segundos_2 = $segundos % 60 % 60 % 60;
        if ($minutos2 < 10)
            $minutos2 = '0' . $minutos2;

        if ($segundos_2 < 10)
            $segundos_2 = '0' . $segundos_2;

        if ($segundos < 60) { /* segundos */
            $resultado = round($segundos) . ' Segundos';
        } elseif ($segundos > 60 && $segundos < 3600) { /* minutos */
            $resultado = $minutos2
                . ':'
                . $segundos_2;
        } else { /* horas */
            $resultado = $horas . ':' . $minutos2 . ':' . $segundos_2 . ' Horas';
        }
        return $resultado;
    }
}
