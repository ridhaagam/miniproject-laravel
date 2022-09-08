<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\MatkulRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\MatkulController;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Matkul::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" 
                            href="' . route('dashboard.matkul.edit', $item->id) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.matkul.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->rawColumns(['action'])
                
                ->make();
        }

        return view('pages.dashboard.matkul.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MatkulRequest $request)
    {


        Matkul::create([
                'kode' => $request->get('kode'),
                'matkul' => $request->get('matkul'),
                'sks' => $request->get('sks'),
                'semester' => $request->get('semester'),
        ]);
    
        return redirect()->route('dashboard.matkul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matkul  $Matkul
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Matkul $Matkul)
    {
                $data = $request->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkul  $Matkul
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Matkul $Matkul)
    {
        return view('pages.dashboard.matkul.edit',[
            'item' => $Matkul
        ]);
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatkulRequest $request, Matkul $Matkul)
    {
        $data = $request->all();

        $Matkul->update($data);

        return redirect()->route('dashboard.matkul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matkul  $Matkul
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Matkul $Matkul)
    {
        
        $Matkul->delete();

        return redirect()->route('dashboard.matkul.index');
    }
}
