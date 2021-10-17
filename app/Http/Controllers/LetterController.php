<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LetterController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get data from table posts
        $letters = Letter::latest()->get();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List all letters template',
            'data'    => $letters
        ], 200);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $letter = Letter::findOrfail($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Letter',
            'data'    => $letter
        ], 200);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'opening' => 'required',
            'main' => 'required',
            'closing' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $letter = Letter::create([
            'name'   => $request->name,
            'opening' => $request->opening,
            'main' => $request->main,
            'closing' => $request->closing,
        ]);

        //success save to database
        if ($letter) {

            return response()->json([
                'success' => true,
                'message' => 'Letter Created',
                'data'    => $letter
            ], 201);
        }

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Letter Failed to Save',
        ], 409);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $letter
     * @return void
     */
    public function update(Request $request, Letter $letter)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'opening' => 'required',
            'main' => 'required',
            'closing' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //find post by ID
        $letter = Letter::findOrFail($letter->id);

        if ($letter) {

            //update post
            $letter->update([
                'name'   => $request->name,
                'opening' => $request->opening,
                'main' => $request->main,
                'closing' => $request->closing,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Letter Updated',
                'data'    => $letter
            ], 200);
        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Letter Not Found',
        ], 404);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        //find post by ID
        $letter = Letter::findOrfail($id);

        if ($letter) {

            //delete post
            $letter->delete();

            return response()->json([
                'success' => true,
                'message' => 'Letter Deleted',
            ], 200);
        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Letter Not Found',
        ], 404);
    }
}
