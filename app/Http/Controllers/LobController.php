<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lob;
use App\Models\Integration;
use App\Models\ActivityLog;
use Carbon\Carbon;
use Validator;

class LobController extends Controller
{
    public function index()
    {
        $data_lobs = Lob::orderBy('lob', 'DESC')->get();
        return view('lobCRUD.index', compact('data_lobs'));
    }

    public function create()
    {
        return view('lobCRUD.create');
    }

    public function store(Request $request)
    {
        $storeData = $request->all();
        $validate = Validator::make($storeData, [
            'lob' => 'required|alpha',
            'cause' => 'required|alpha',
            'total_customer' => 'required|numeric',
            'total_claim' => 'required|numeric'
        ]);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);
        Lob::create($request->all());
        return redirect()->route('lob.index')->with('success', 'Item Created Successfully');
    }

    public function show(string $id)
    {
        $data_lob = Lob::find($id);
        return view('lobCRUD.show', compact('data_lob'));
    }

    public function edit(string $id)
    {
        $data_lob = Lob::find($id);
        return view('lobCRUD.edit', compact('data_lob'));
    }

    public function update(Request $request, $id)
    {
        Lob::where('id', $id)->update($request->except('_method', '_token'));
        return redirect()->route('lob.index')->with('success', 'Item Updated Successfully');
    }

    public function destroy(string $id)
    {
        Lob::find($id)->delete();
        return redirect()->route('lob.index')->with('success', 'Item Deleted Successfully');
    }

    public function integration()
    {
        $data_lob = Lob::whereIn('lob', ['KUR', 'PEN'])->get();

        if (count($data_lob) > 0) {
            foreach ($data_lob as $lob) {
                $data_integration = Integration::insert([
                    [
                        'lob' => $lob->lob,
                        'cause' => $lob->cause,
                        'total_customer' => $lob->total_customer,
                        'total_claim' => $lob->total_claim,
                        'created_at' => $lob->created_at,
                        'updated_at' => $lob->updated_at
                    ]
                ]);
            }

            ActivityLog::insert([
                'total_data' => count($data_lob),
                'status' => 'Success',
                'integrated_date' => date('Y-m-d H:i:s'),
            ]);

            return response([
                'message' => 'Integration From LOB Success',
                'data' => $data_integration
            ], 200);
        }

        ActivityLog::insert([
            'total_data' => count($data_lob),
            'status' => 'Failed',
            'integrated_date' => date('Y-m-d H:i:s'),
        ]);

        return response([
            'message' => 'Empty',
            'data' => null
        ], 404);
    }
}
