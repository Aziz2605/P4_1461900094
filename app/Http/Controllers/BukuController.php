<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class BukuController extends Controller
{

    public function index()
    {
        $katalog = Buku::All();
        return view('buku_0094', compact('katalog'));
    }

    public function export_excel(){
        return Excel::download(new BukuExport, 'Data_1461900094.xlsx');
    }
}
