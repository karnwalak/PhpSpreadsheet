<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\TextData;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;

class TextSplitTest extends AllSetupTeardown
{
    /**
     * @dataProvider providerTEXTSPLIT
     */
    public function testTextSplit(array $expectedResult, array $arguments): void
    {
        $text = $arguments[0];
        $columnDelimiter = $arguments[1];
        $rowDelimiter = $arguments[2];

        $args = 'A1';
        $args .= (is_array($columnDelimiter)) ? ', {A2,B2}' : ', A2';
        $args .= (is_array($rowDelimiter)) ? ', {A3,B3}' : ', A3';
        $args .= (isset($arguments[3])) ? ", {$arguments[3]}" : ',';
        $args .= (isset($arguments[4])) ? ", {$arguments[4]}" : ',';
        $args .= (isset($arguments[5])) ? ", {$arguments[5]}" : ',';

        $worksheet = $this->getSheet();
        $worksheet->getCell('A1')->setValue($text);
        $worksheet->getCell('A2')->setValue((is_array($columnDelimiter)) ? $columnDelimiter[0] : $columnDelimiter);
        if (is_array($columnDelimiter)) {
            $worksheet->getCell('B2')->setValue($columnDelimiter[1]);
        }
        $worksheet->getCell('A3')->setValue((is_array($rowDelimiter)) ? $rowDelimiter[0] : $rowDelimiter);
        if (is_array($rowDelimiter)) {
            $worksheet->getCell('B3')->setValue($rowDelimiter[1]);
        }
        $worksheet->getCell('B12')->setValue("=TEXTSPLIT({$args})");

        $result = Calculation::getInstance($this->getSpreadsheet())->calculateCellValue($worksheet->getCell('B12'));
        self::assertSame($expectedResult, $result);
    }

    public function providerTEXTSPLIT(): array
    {
        return require 'tests/data/Calculation/TextData/TEXTSPLIT.php';
    }
}
