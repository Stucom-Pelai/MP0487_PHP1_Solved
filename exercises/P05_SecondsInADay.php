<?php

class P05_SecondsInADay {
    public function main(): void {
        // Output the label
        echo "Seconds in 1 day:\n";
        
        // Write your program here
        // Calculate the number of seconds in a day
        $days = 1;
        $seconds = 60 * 60 * 24 * $days;

        // Output the result
        echo $seconds . "\n";
    }
}
