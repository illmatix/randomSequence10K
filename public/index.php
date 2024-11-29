<?php
declare(strict_types=1);

require '../vendor/autoload.php';

use illmatix\RandomSequence\SequenceGenerator;

// Create a new generator for numbers 1 to 10,000
$generator = new SequenceGenerator(1, 10000);

// Get the randomized sequence
$sequence = $generator->getSequence();

// Print the sequence
$generator->printSequence();