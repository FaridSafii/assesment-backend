<?php

namespace App\Http\Controllers\API;
use App\Models\Employe;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;
class EmployeController extends Controller
{
    public function all(Request $request)
    {   //Get All Data Pegawai
        $limit=$request->input('limit');
            $employe = Employe::select('nama')->paginate($limit);
            
            if ($employe) {
               return ResponseFormatter::success(
                $employe,
                   'Data kategori berhasil diambil'
               );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data kategori tidak ada',
                    404
                );
            }
    } 
    public function create(Request $request)
    {
        try {
            $request->validate([
                'nama' => ['required','string','max:10','unique:employes'],
                'total_gaji' =>['required','integer','between:4000000,10000000'],
                ],
                [
                    'nama.required' => 'Nama is required',
                    'total_gaji.required' => 'Gaji is required',
                    'total_gaji.between' => 'Gaji Rp. 4.000.000 - Rp 10.000.000',
                    'nama.max' => 'Jumlah karakter lebih dari 10'
                ]
            );
            Employe::create([
                'nama' => $request->nama,
                'total_gaji' => $request->total_gaji
            ]);
            $nama = Employe::where('nama',$request->nama)->first();
            return ResponseFormatter::success([
                'pegawai' => $nama
            ], 'Pegawai sudah terdaftar');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Cek data',
                'error' => $error
            ], 'Cek kembali data',500);
        }
    }
}
