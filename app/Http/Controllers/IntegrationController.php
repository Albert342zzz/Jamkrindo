<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Integration;
use Validator;

class IntegrationController extends Controller
{
    public function index()
    {
        $data_integrations = Integration::all();

        if (count($data_integrations) > 0) {
            return response([
                'message' => 'Retrieve All Success',
                'data' => $data_integrations
            ], 200);
        }

        return response([
            'message' => 'Empty',
            'data' => null
        ], 404);
    }

    public function show($id)
    {
        $data_integration = Integration::find($id);

        if (!is_null($data_integration)) {
            return response([
                'message' => 'Retrieve Integration Success',
                'data' => $data_integration
            ], 200);
        }

        return response([
            'message' => 'Integration Not Found',
            'data' => null
        ], 404);
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

        $data_integration = Integration::create($storeData);
        return response([
            'message' => 'Add Integration Success',
            'data' => $data_integration,
        ], 200);
    }

    public function destroy($id)
    {
        $data_integration = Integration::find($id);

        if (is_null($data_integration)) {
            return response([
                'message' => 'Integration Not Found',
                'data' => null
            ], 404);
        }

        if ($data_integration->delete()) {
            return response([
                'message' => 'Delete Integration Success',
                'data' => $data_integration,
            ], 200);
        }

        return response([
            'message' => 'Delete Integration Failed',
            'data' => null,
        ], 400);
    }

    public function update(Request $request, $id)
    {
        $data_integration = Integration::find($id);
        if (is_null($data_integration)) {
            return response([
                'message' => 'Integration Not Found',
                'data' => null
            ], 404);
        }

        $updateData = $request->all();
        $validate = Validator::make($updateData, [
            'lob' => 'alpha',
            'cause' => 'alpha',
            'total_customer' => 'numeric',
            'total_claim' => 'numeric'
        ]);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);

        $data_integration->lob = $updateData['lob'];
        $data_integration->cause = $updateData['cause'];
        $data_integration->total_customer = $updateData['total_customer'];
        $data_integration->total_claim = $updateData['total_claim'];

        if ($data_integration->save()) {
            return response([
                'message' => 'Update Integration Success',
                'data' => $data_integration,
            ], 200);
        }
        return response([
            'message' => 'Update Integration Failed',
            'data' => null,
        ], 400);
    }
}
