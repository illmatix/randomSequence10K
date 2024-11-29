<?php

declare(strict_types=1);

namespace Tests;

use illmatix\RandomSequence\SequenceGenerator;
use PHPUnit\Framework\TestCase;

class SequenceGeneratorTest extends TestCase
{
    public function testDefaultSequenceGeneration(): void
    {
        $generator = new SequenceGenerator();
        $sequence  = $generator->getSequence();

        $this->assertCount(10000, $sequence, 'Sequence should contain 10,000 numbers');
        $this->assertEqualsCanonicalizing(range(1, 10000), $sequence, 'Sequence should include all numbers from 1 to 10,000');
    }

    public function testCustomRangeSequenceGeneration(): void
    {
        $generator = new SequenceGenerator(1, 500);
        $sequence  = $generator->getSequence();

        $this->assertCount(500, $sequence, 'Sequence should contain 500 numbers');
        $this->assertEqualsCanonicalizing(range(1, 500), $sequence, 'Sequence should include all numbers from 1 to 500');
    }

    public function testSequenceIsRandomized(): void
    {
        $generator = new SequenceGenerator();
        $sequence  = $generator->getSequence();

        $this->assertNotEquals(range(1, 10000), $sequence, 'Sequence should not be in the original order');
    }

    public function testPrintSequence(): void
    {
        $generator = new SequenceGenerator(1, 10);

        ob_start();
        $generator->printSequence();
        $output = ob_get_clean();

        $outputArray = array_map('intval', explode(PHP_EOL, trim($output)));
        $this->assertEqualsCanonicalizing(range(1, 10), $outputArray, 'Output should contain all numbers from 1 to 10, in any order');
    }
}
