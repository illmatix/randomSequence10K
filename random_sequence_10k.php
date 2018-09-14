<?php

  namespace capayne\pandell;

  /**
   * Class randomSequence10K
   *
   * @package capayne\pandell
   * @author Chad Andon Payne <chadpayne@gmail.com>
   */
  class randomSequence10K {

    /**
     * @var array
     */
    public $numbers;

    /**
     * @var int
     */
    private $length;

    /**
     * randomSequence10K constructor.
     */
    function __construct() {
      $this->numbers = range(1, 10000);
      $this->length = count($this->numbers);
      $this->randomize($this->numbers);
      $this->printNumbers();
    }

    /**
     * Swaps array values by index.
     *
     * @param array $numbers
     * @param int   $value_a
     * @param int   $value_b
     */
    private function swapArrayValues(array &$numbers, int $value_a, int $value_b) {
      list($numbers[$value_a], $numbers[$value_b]) = [
        $numbers[$value_b],
        $numbers[$value_a],
      ];
    }

    /**
     * Outputs $numbers array with line breaks.
     */
    private function printNumbers() {
      for ($i = 0; $i < $this->length; $i++) {
        print $this->numbers[$i] . "\n\r";
      }
    }

    /**
     * Creates seed for random number generation.
     *
     * @return float|int
     */
    private function makeSeed() {
      list($usec, $sec) = explode(' ', microtime());
      return $sec + $usec * 1000000;
    }

    /**
     * Randomize the $numbers array.
     *
     * @param array $numbers
     */
    private function randomize(array &$numbers) {
      srand($this->makeSeed());

      for ($i = $this->length - 1; $i > 0; $i--) {
        $randIndex = rand() % ($i + 1);
        $this->swapArrayValues($numbers, $i, $randIndex);
      }
    }

  }

  $run = new randomSequence10K();
