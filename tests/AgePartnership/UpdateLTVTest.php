<?php

namespace AgePartnership;

require_once(__DIR__ . '/../../src/AgePartnership/UpdateLTV.php');

use PHPUnit\Framework\TestCase;
use AgePartnership\UpdateLTV;

class UpdateLTVTest extends TestCase
{
    public function testOpenSpreadsheet()
    {
        $updateLTV = new UpdateLTV;
        $spreadSheet = $updateLTV->openSpreadsheet(__DIR__ . '/../testCases/Max-LTV.XLSX');

        $this->assertEquals(0, 1);
    }

    public function testParseSpreadsheet()
    {
        $updateLTV = new UpdateLTV;
        $test = $updateLTV->parseSpreadsheet();

        $this->assertEquals(0, 1);
    }

    public function testOverwriteLTV()
    {
        $updateLTV = new UpdateLTV;
        $test = $updateLTV->overwriteLTV();

        $this->assertEquals(0, 1);
    }
}
