<?php

declare(strict_types=1);

class Lasagna
{
    /**
     * Define the expected oven time in minutes.
     *
     * @return int minutes.
     */
    public function expectedCookTime():int {
        return 40;
    }

    /**
     * Calculate the remaining oven time in minutes
     * 
     * @param int $elapsed_minutes Elapsed minutes.
     * 
     * @return int minutes.
     */
    public function remainingCookTime(int $elapsed_minutes):int {
        $left_time = $this->expectedCookTime() - $elapsed_minutes;
        return $left_time;
    }

    /**
     * Calculate the preparation time in minutes
     * 
     * @param int $layers_to_prep Number of layers.
     * 
     * @return int minutes.
     */
    public function totalPreparationTime(int $layers_to_prep):int {
        $spent_time = $layers_to_prep * 2;
        return $spent_time;
    }

    /**
     * Calculate the total working time in minutes.
     * 
     * @param int $layers_to_prep Number of layers.
     * @param int $elapsed_minutes Elapsed minutes.
     * 
     * @return int minutes.
     */
    public function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes):int {
        $layer_time = $this->totalPreparationTime($layers_to_prep);
        $total_time = $layer_time + $elapsed_minutes;
        return $total_time;
    }

    /**
     * 
     * @param int $layers_to_prep
     * 
     * @return string Ding. 
     */
    public function alarm():string {
        return 'Ding!';
    }
}
