<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CsvExportController extends Controller
{
    public function view()
    {
        $data = User::all();
        return view('exportExcel',compact('data'));
    }

    public function exportExcel()
    {
        $name = 'users.csv'; //filename
        $headers = [
            'Content-Disposition' => 'attachment; filename='. $name,
        ];
        $col = \Illuminate\Support\Facades\Schema::getColumnListing("users");
        $temp_col = array_flip($col);
        unset($temp_col['id']);
        $col = array_flip($temp_col);
        return response()->stream(function() use($col){ //writing file
            $file = fopen('php://output', 'w+');
            fputcsv($file, $col);
            $data = \App\Models\User::cursor();
            
            foreach ($data as $key => $value) {
                $data = $value->toArray();
                
                unset($data['id']);

                fputcsv($file, $data);
            }
            $blanks = array("\t","\t","\t","\t");
            fputcsv($file, $blanks);
            $blanks = array("\t","\t","\t","\t");
            fputcsv($file, $blanks);
            $blanks = array("\t","\t","\t","\t");
            fputcsv($file, $blanks);

            fclose($file); //closing file writing
        }, 200, $headers);        
    }
}