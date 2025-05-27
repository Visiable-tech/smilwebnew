<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\PostMetaElement;
use Illuminate\Support\Facades\Validator;

class CSVUploadController extends Controller
{
    public function index()
    {
        return view('admin/uploadcsv');

    }

    public function upload(Request $request)
    {
        /*$request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:20480',
        ]);*/

        $file = $request->file('csv_file');
        $header = null;

        if (($handle = fopen($file->getRealPath(), 'r')) !== false) {
            while (($row = fgetcsv($handle, 0, ",")) !== false) {
                if (!$header) {
                    $header = $row;
                    continue;
                }

                if (count($row) == count($header)) {
                    $rowData = array_combine($header, $row);

                    // Check post_content length
                    echo "<pre>" . substr($rowData['post_content'], 0, 500) . "</pre><hr>"; // Preview first 500 chars

                    // Save to DB if needed
                    // YourModel::create($rowData);
                }
            }
            fclose($handle);
        }

        //return back()->with('success', 'CSV processed successfully.');
    }

}

