<?php

declare(strict_types=1);

namespace illmatix\RandomSequence;

/**
 * Class SequenceGenerator
 *
 * @package illmatix\RandomSequence
 * @author Chad Payne <chadpayne@gmail.com>
 */
class SequenceGenerator
{
    /**
     * @var array
     */
    public $numbers;

    /**
     * @var int
     */
    private $length;

    /**
     * SequenceGenerator constructor.
     * Initializes the number sequence and randomizes it.
     */
    public function __construct(int $start = 1, int $end = 10000)
    {
        $this->numbers = range($start, $end);
        $this->length  = count($this->numbers);
        $this->randomize($this->numbers);
    }

    /**
     * Swaps two array values by their indexes.
     *
     * @param array $numbers
     * @param int $valueA
     * @param int $valueB
     */
    private function swapArrayValues(array &$numbers, int $valueA, int $valueB): void
    {
        [$numbers[$valueA], $numbers[$valueB]] = [$numbers[$valueB], $numbers[$valueA]];
    }


    /**
     * Generates a random seed.
     *
     * @return float
     */
    private function makeSeed(): float
    {
        [$usec, $sec] = explode(' ', microtime());
        return (float)$sec + ((float)$usec * 1000000);
    }

    /**
     * Randomizes the array using the Fisher-Yates shuffle algorithm.
     *
     * @param array $numbers
     */
    private function randomize(array &$numbers): void
    {
        srand((int)$this->makeSeed());

        for ($i = $this->length - 1; $i > 0; $i--) {
            $randIndex = rand(0, $i); // Updated to ensure clarity
            $this->swapArrayValues($numbers, $i, $randIndex);
        }
    }

    /**
     * Returns the randomized sequence.
     *
     * @return array
     */
    public function getSequence(): array
    {
        return $this->numbers;
    }

    /**
     * Outputs the sequence with line breaks.
     */
    public function printSequence(): void
    {
        foreach ($this->numbers as $number) {
            echo $number . PHP_EOL;
        }
    }

}
