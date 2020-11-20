<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactBook as ContactBookResource;
use App\Models\Contact;
use App\Models\ContactBook;
use Illuminate\Http\Request;

class ContactBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        try {
            $rs = ContactBook::query()
                ->orderBy('name', 'ASC')
                ->with('contacts')
                ->paginate(10);

            return ContactBookResource::collection($rs);
        } catch (\Exception $error) {
            return response()
                ->json($error->getMessage(), 401);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            $rs = ContactBook::query()
                ->create($data);

            return response()->json([
                'message' => 'Data saved successfully.',
                'data' => $rs,
            ], 201);

        } catch (\Exception $error) {
            return response()
                ->json($error->getMessage(), 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return ContactBookResource|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $rs = ContactBook::query()
                ->with('contacts')
                ->find($id);
            if ($rs) {
                return new ContactBookResource($rs);
            } else {
                return response()->json([
                    'message' => 'Dados não encontrados',
                    'data' => false,
                ], 404);
            }
        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
