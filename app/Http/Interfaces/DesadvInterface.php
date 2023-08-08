<?php

namespace App\Http\Interfaces;

use App\Models\Desadv;

interface DesadvInterface {

    /**
     * Loading CSV files from specified directory, data processing and insertion into the database.
     *
     * @param string $directory The name of the directory which contain CSV files.
     * @return void
     */
    public function loadDesadvData($directory):void;

    /**
     * Reading all records from the csv file and calling the function to insert data into the database.
     *
     * @param string $directory The name of the directory which contain CSV files.
     * @param string $filename The name of the CSV file.
     * @return void
    */
    public function readCsvRecords(string $directory, string $filename): void;

    /**
     * Inserting the passed row from csv file into the 'desadv' table.
     *
     * @param array $row One record from CSV file
     * @param string $filename The name of the CSV file.
     * @return void
    */
    public function insertCsvRecordIntoDesadvTable(array $row, string $filename): void;

    /**
     * Return all records from 'desadv' table
     *
     * @return collection
    */
    public function getAllDesadv();
}
