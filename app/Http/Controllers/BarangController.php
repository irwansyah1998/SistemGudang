<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use OpenApi\Annotations as OA;


class BarangController extends Controller
{

    public function index()
    {
        $barangs = Barang::all();

        if ($barangs->isEmpty()) {
            return response()->json(['error' => 'No barangs found'], 404);
        }

        return response()->json($barangs, 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kode' => 'required|string|unique:barangs|max:255',
            'kategori' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
        ]);

        $barang = Barang::create($request->all());
        return response()->json($barang, 201);
    }


    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return response()->json($barang);
    }


    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);
        $request->validate([
            'nama_barang' => 'sometimes|required|string|max:255',
            'kode' => 'sometimes|required|string|max:255|unique:barangs,kode,' . $barang->id,
            'kategori' => 'sometimes|required|string|max:255',
            'lokasi' => 'sometimes|required|string|max:255',
        ]);

        $barang->update($request->all());
        return response()->json($barang);
    }

    /**
     * @OA\Delete(
     *     path="/api/barangs/{id}",
     *     summary="Delete a barang",
     *     tags={"Barangs"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Barang deleted"
     *     ),
     *     @OA\Response(response=404, description="Barang not found")
     * )
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return response()->json(null, 204);  // Mengembalikan respons kosong dengan kode status 204 (No Content)
    }
}
