<?php

namespace App\Http\Controllers;

use App\Http\Repositories\DesadvRepository;
use App\Http\Requests\CsvStoreRequest;
use App\Models\Desadv;
use Illuminate\Http\Request;

class DesadvController extends Controller
{
    protected $desadvRepository;

    public function __construct(DesadvRepository $desadvRepository)
    {
        $this->desadvRepository = $desadvRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desadvs = $this->desadvRepository->getAllDesadv();
        return view('desadv.index')
            ->with([
                'desadvs' => $desadvs,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CsvStoreRequest $request)
    {
        //checking if the file has a .csv or .txt extension and is less than 64KB
        $validated = $request->validated();

        $uploadedFiles = $request->file('csv_file');

        foreach ($uploadedFiles as $file) {
            //storing each file
            $filename = $file->getClientOriginalName();
            $file->storeAs('DESADVdata', $filename);
            //function to read the stored file and insert it into database
            $this->desadvRepository->readCsvRecords('DESADVdata',$filename);
        }

        return redirect()
        ->back()
        ->withSuccess('Successful files upload.');
    }

    /**
     * Display the specified resource.
     */
    public function show($desadv_id)
    {
        $data = $this->desadvRepository->getNotNullDesadvColumns($desadv_id);
        return view('desadv.details')
            ->with([
                'desadv' => $data['desadv'],
                'notNullColumns' => $data['notNullColumns'],
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desadv $desadv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desadv $desadv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desadv $desadv)
    {
        //
    }

    /**
     * Search the specified resource.
     */
    public function search(Request $request)
    {

        $desadvs = $this->desadvRepository->searchDesadvs($request);
        return view('desadv.index')
            ->with([
                'desadvs' => $desadvs,
            ]);
    }
}
