<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\DesadvInterface;
use App\Models\Desadv;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DesadvRepository implements DesadvInterface
{

    public function loadDesadvData($directory): void
    {
        //getting the names of all files from the DESADVdata folder
        $filenames = array_map('basename', Storage::files($directory));

        foreach ($filenames as $filename) {
            self::readCsvRecords($directory,$filename);
        }
    }

    public function readCsvRecords(string $directory,string $filename): void
    {
        $file = fopen(storage_path("app/".$directory."/" . $filename), 'r');
        //read value form csv file
        while ($row = fgetcsv($file, 0, "|")) {
            //convert all empty values in array to NULL
            $row = array_map(function ($value) {
                return empty($value) ? null : $value;
            }, $row);
            //inserting values from the file into the database
            self::insertCsvRecordIntoDesadvTable($row, $filename);
        }
        fclose($file);
    }

    public function insertCsvRecordIntoDesadvTable(array $row, string $filename): void
    {
        Desadv::create([
            'material' => $row[0],
            'quantity' => $row[1],
            'delivery_id' => $row[2],
            'document_id' => $row[3],
            'tracking_number' => $row[4],
            'hwb' => $row[5],
            'contract_number' => $row[6],
            'ponr_line' => $row[7],
            'sonr' => $row[8],
            'invoice_nr' => $row[9],
            //change date format to (Y-m-d)
            'despatch_date' => Carbon::parse($row[10])->format('Y-m-d'),
            //assigning an arrival date value if it does not exist
            'arrival_date' => is_null($row[11]) ? Carbon::parse($row[10])->addWeek()->format('Y-m-d') : $row[11],
            'inco_term' => $row[12],
            'da_packages' => $row[13],
            'pack_list_nr' => $row[14],
            'transport_mode' => $row[15],
            'carrier' => $row[16],
            'van_id' => $row[17],
            'interchange_control_reference' => $row[18],
            'message_data' => $row[19],
            'lig1' => $row[20],
            'ctr1' => $row[21],
            'fv1' => $row[22],
            'lig2' => $row[23],
            'ctr2' => $row[24],
            'fv2' => $row[25],
            'lig3' => $row[26],
            'ctr3' => $row[27],
            'fv3' => $row[28],
            'supplier_material' => $row[29],
            'weight' => $row[30],
            'key' => $row[31],
            'line' => $row[32],
            //true - if the arrival date value was manually calculated, false - if not
            'calculated_arrival_date' => is_null($row[11]) ? true : false,
            'filename' => $filename,
        ]);
    }

    public function getAllDesadv()
    {
        $desadvs=Desadv::GetDesadvWithSupplier()->paginate(25);
        return $desadvs;
    }
}
