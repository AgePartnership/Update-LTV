<?php

namespace AgePartnership;

/**
 * AgePartnership\UpdateLTV
 *
 * Class for functions for updating the LTV data
 *
 * @author Ben Mills Perkins
 * @copyright Age Partnership Ltd
 * @license Private
 *
 */

require_once(__DIR__ . '/../../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class UpdateLTV
{
    public function openSpreadsheet($fileName)
    {
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($fileName);
        return($spreadSheet);
    }

    public function parseSpreadsheet()
    {
        return(null);
    }

    public function overwriteLTV()
    {
        return(null);
    }
}
