<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Resources\ComplentResource;
use App\Models\Complent;

class ComplentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complents = Complent::all()->sortByDesc('updated_at');
        $response = [
            'status' => '200',
            'message' => 'Ok',
            'data' => ComplentResource::collection($complents)
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')) {
            $validation = Validator::make($request->all(), [
                'user_id' => 'required',
                'description' => 'required'
            ]);

            if($validation->fails()) {
                $response = [
                    'status' => '400',
                    'message' => 'Bad Request',
                    'errorMessage' => $validation->errors(),
                    'data' => []
                ];
                return response()->json($response, 400);
            }

            $complent = new Complent;
            $complent->user_id = $request->input('user_id');
            $complent->description = $request->input('description');

            if($complent->save()) {
                $response = [
                    'status' => '200',
                    'message' => 'Ok',
                    'data' => ComplentResource::collection(Complent::where('user_id', $request->input('user_id'))->orderBy('updated_at', 'desc')->get())
                ];
                return response()->json($response, 404);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('put')) {
            $complent = Complent::find($request->input('id'));
            $user_id = $request->input('user_id');

            if($complent) {
                $complent->status = 'done';
                
                if($complent->save()) {
                    $response = [
                        'status' => '200',
                        'message' => 'Ok',
                        'data' => ComplentResource::collection(Complent::where('user_id', $user_id)->orderBy('updated_at', 'desc')->get())
                    ];
                    return response()->json($response, 200);
                }
            }
            $response = [
                'status' => '404',
                'message' => 'Not Found',
                'data' => []
            ];
            return response()->json($response, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complent = Complent::find($id);

        if($complent) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' => [new ComplentResource($complent)]
            ];
            return response()->json($response, 200);
        }
        $response = [
            'status' => '404',
            'message' => 'Not Found',
            'data' => []
        ];
        return response()->json($response, 404);
    }

    /**
     * Display the specified resource from specific user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByUser($id = null)
    {
        $complent = Complent::where('user_id', $id)->orWhere('lead_technician_id', $id)->orWhere('technician_id', $id)->get();
        
        if($complent) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' =>  ComplentResource::collection($complent)
            ];
            return response()->json($response, 200);
        }
        $response = [
            'status' => '404',
            'message' => 'Not Found',
            'data' => []
        ];
        return response()->json($response, 404);
    }
}
