<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Validator;

class ActivityLogController extends Controller
{
    public function index()
    {
        $logs = ActivityLog::orderBy('id', 'DESC')->get();
        return view('activityLogCRUD.index', compact('logs'));
    }

    public function store(Request $request)
    {
        $storeData = $request->all();
        $validate = Validator::make($storeData, [
            'total_data' => 'required',
            'status' => 'required',
            'integrated_date' => 'required',
        ]);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);
        ActivityLog::create($request->all());
        return redirect()->route('activityLogCRUD.index')->with('success', 'Item Created Successfully');
    }
}
