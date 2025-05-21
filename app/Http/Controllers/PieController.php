<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use Illuminate\Support\Facades\DB;

class PieController extends Controller
{


public function index()
{
    $total = DB::table('pengaduan')->count();
    $pending = DB::table('pengaduan')->where('status', 'pending')->count();
    $proses = DB::table('pengaduan')->where('status', 'proses')->count();
    $selesai = DB::table('pengaduan')->where('status', 'selesai')->count();

    // Ambil data klasifikasi divisi hasil ML
    $divisiData = DB::table('pengaduan')
        ->select('divisi', DB::raw('count(*) as total'))
        ->whereIn('divisi', ['kriminal', 'kerusakan_fasilitas', 'bencana_alam'])
        ->groupBy('divisi')
        ->get();

    // Pastikan semua divisi muncul walaupun belum ada datanya
    $defaultLabels = ['kriminal', 'kerusakan_fasilitas', 'bencana_alam'];
    $labelCount = array_fill_keys($defaultLabels, 0);

    foreach ($divisiData as $item) {
        $labelCount[$item->divisi] = $item->total;
    }

    $labels = array_keys($labelCount);
    $values = array_values($labelCount);

    return view('masyarakat.dashboard', compact(
        'total',
        'pending',
        'proses',
        'selesai',
        'labels',
        'values'
    ));
}







}
