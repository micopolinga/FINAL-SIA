<?php

namespace App\Http\Controllers;
use App\Models\Shirt;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function index()
    {
        $shirts = Shirt::orderBy('name')->get();
        // compact('shirts');
        return view('shirt', [
            'shirts' => $shirts
        ]);
    }


    public function pdf() {
        $shirts = Shirt::orderBy('name')->get();
        $pdf = Pdf::loadView('shirt-list', compact('shirts'));
        return $pdf->stream('shirt-list.pdf');
    }



    public function generateCSV() {
        $shirts = Shirt::orderBy('name')->get();
        $filename = '../storage/shirts.csv';
        $file = fopen($filename, 'w+');

        foreach($shirts as $shirt) {
            fputcsv($file, [

                $shirt->name,
                $shirt->type,
                $shirt->price
            ]);
        }

        fclose($file);
        return response()->download($filename);
    }



    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);
        $file = $request->file('csv_file');
        $csvData = array_map('str_getcsv', file($file));

        foreach ($csvData as $row) {

            $name = $row[0];
            $type = $row[1];
            $price = $row[2];

            Shirt::updateOrCreate(
                ['name' => $name,
                 'type' => $type,
                 'price' => $price]
            );
        }
        return redirect()->route('shirts.index')->with('success', 'Shirts imported successfully.');
    }



}
