<?php

namespace AgePartnership;

require_once(__DIR__ . '/../../src/AgePartnership/UpdateLTV.php');

use PHPUnit\Framework\TestCase;
use AgePartnership\UpdateLTV;

class UpdateLTVTest extends TestCase
{
    public function setUp()
    {
        $updateLTV = new UpdateLTV;
    }

    public function testOpenSpreadsheet()
    {
        $spreadSheet = $updateLTV->openSpreadsheet;

        $this->assertEquals(0, 1);
    }

    public function testParseSpreadsheet()
    {
        $test = $updateLTV->parseSpreadsheet;

        $this->assertEquals(0, 1);
    }

    public function testOverwriteLTV()
    {
        $test = $updateLTV->overwriteLTV;

        $this->assertEquals(0, 1);
    }
}
