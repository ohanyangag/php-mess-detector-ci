<?php


class Car {
    public const default_wheels_count = 4;
    public function start(): int
    {
        $unusedVariable = 1;
        try {
            throw new \Exception('My message');
        } catch (\Exception $e) {

        }
        $x = 1;

        if($x == 3) {
            return 5;
        }

        return 4;
    }

    /**
     * @return boolean
     */
    public function getEngine(): bool
    {
        $hasEngine = true;

        return $hasEngine;
    }
}