<?php

class CsvParser implements ParserInterface
{
    public function parse(string $data)
    {
        // Parse CSV data
        $lines = explode("\n", $data);
        $header = str_getcsv(array_shift($lines));
        $parsedData = [];
        foreach ($lines as $line) {
            $rowData = str_getcsv($line);
            $parsedRow = [];
            foreach ($header as $index => $columnName) {
                $parsedRow[$columnName] = $rowData[$index];
            }
            $parsedData[] = $parsedRow;
        }
        return $parsedData;
    }
}
