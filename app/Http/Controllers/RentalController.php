<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class RentalController extends Controller
{
    public function index()
    {
        $Data = (new BaseApi)->index('/api/rentals');
        $rentals = $Data->json('data');
        return view('rentals.index')->with('rentals', $rentals);
    }

    public function create()
    {
        return view('rentals.create');
    }

    public function store(Request $request)
    {
        $total_harga = $request->waktu_jam * 150000;
        $upload = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'type' => $request->type,
            'waktu_jam' => $request->waktu_jam,
            'jam_mulai' => $request->jam_mulai,
            'supir' => $request->supir,
        ];
        

        $baseApi = new BaseApi;
        $rentals = $baseApi->create('api/rentals/store', $upload);
        if ($rentals->failed()) {
            $errors = $rentals->json();
            return redirect()->back()->with(['errors' => $errors]);
        }
        return redirect('/sewa')->with('success', 'Success Add new Data!');
    }

    public function edit($id)
    {
        $Data = (new BaseApi)->detail('/api/rentals/show', $id);
        $rentals = $Data->json('data');
        // dd($rentals);

        return view('rentals.update')->with('rentals' , $rentals);
    }

    public function show($id)
    {
        $Data = (new BaseApi)->detail('/api/rentals/show', $id);
        $rentals = $Data->json('data');
        
        return view('rentals.show')->with('item' , $rentals);
    }

    public function update(Request $request, $id)
    {
        $upload = [
            'jam_selesai' => $request->jam_selesai,
            'tempat_tujuan' => $request->tempat_tujuan,
            'riwayat_perjalanan' => $request->riwayat_perjalanan,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('/api/rentals/update/data',$id, $upload);
        // dd($response);
        
        return redirect('/sewa');
    }

    public function destroy(Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/rentals/delete', $id);
        return redirect('/sewa');
    }
    
    public function trash()
    {
        $Data = (new BaseApi)->trash('/api/rentals/trash/all');
        if ($Data->failed()){
            $error = $Data->json();
            return redirect()->back()->with(['error' => $error]);
        }else {
            $Datatrash = $Data->json();
            return view ('rentals.trash')->with('datatrash' , $Datatrash['data']);
        }
    }

    public function restore($id) 
    {
        $Data = (new BaseApi)->restore('/api/rentals/trash/restore/'. $id);
        if ($Data->failed()) {
            $errors = $Data->json();
            return redirect()->back()->with(['errors' => $errors]);
        }else {
            return redirect('/rentals')->with('success', 'Berhasil mengembalikan data!!');
        }
    }

    public function fixDelete($id)
    {
        $Data = (new BaseApi)->fixDelete('/api/rentals/trash/fixdelete/'.$id);
        if ($Data->failed()) {
            $errors = $Data->json();
            return redirect()->back()->with('errors', $errors);
        } else {
            return redirect()->back()->with('success', 'Berhasil menghapus data secara permanen!');
        }
    }

}