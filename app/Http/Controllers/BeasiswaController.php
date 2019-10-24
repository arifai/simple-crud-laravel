<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeasiswaController extends Controller
{
    // method index
    public function index()
    {
        // ambil data
        $beasiswa = DB::table('beasiswa')->get();

        // kirim data ke view
        return view('index', ['beasiswa' => $beasiswa]);
    }

    // tampilkan halaman /beasiswa/add
    public function add()
    {
        return view('add');
    }

    // method tambah data
    public function tambah(Request $request)
    {
        DB::table('beasiswa')->insert([
            'nama_beasiswa' => $request->nama_b,
            'sumber_beasiswa' => $request->sumber_b,
            'kuota' => $request->kuota,
            'kriteria_1' => $request->kriteria_1,
            'kriteria_2' => $request->kriteria_2,
            'kriteria_3' => $request->kriteria_3,
            'kriteria_4' => $request->kriteria_4,
            'bentuk_beasiswa' => $request->bentuk,
        ]);

        return redirect('beasiswa');
    }

    public function edit($id)
    {
        // ambil data berdasarkan id
        $beasiswa = DB::table('beasiswa')->where('id', $id)->get();
        return view('edit', ['beasiswa' => $beasiswa]);
    }

    public function update(Request $request)
    {
        DB::table('beasiswa')->where('id', $request->id)->update([
            'nama_beasiswa' => $request->nama_b,
            'sumber_beasiswa' => $request->sumber_b,
            'kuota' => $request->kuota,
            'kriteria_1' => $request->kriteria_1,
            'kriteria_2' => $request->kriteria_2,
            'kriteria_3' => $request->kriteria_3,
            'kriteria_4' => $request->kriteria_4,
            'bentuk_beasiswa' => $request->bentuk,
        ]);

        return redirect('beasiswa');
    }

    public function del($id)
    {
        DB::table('beasiswa')->where('id', $id)->delete();

        return redirect('beasiswa');
    }
}
