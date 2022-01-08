<?php

namespace App\Http\Controllers\API;
use App\Models\Employe;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
