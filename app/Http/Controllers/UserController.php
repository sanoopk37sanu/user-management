<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = DB::table('users')
            ->join('departments', 'departments.id', '=', 'users.Fk_department')
            ->join('designations', 'designations.id', '=', 'users.Fk_designation')
            ->select('users.*', 'departments.Name as department', 'designations.Name as designation')
            ->get();
        if (is_null($User->first())) {
            return response()->json([
                'status' => 'failed',
                'message' => 'No User found!',
            ], 200);
        }
        $response = [
            'status' => 'success',
            'message' => 'User are retrieved successfully.',
            'data' => $User,
        ];
        return response()->json($response, 200);
    }

    public function UserList(Request $request)
    {
        $searchQuery = $request->query('searchQuery');
        $User = DB::table('users')
            ->join('departments', 'users.Fk_department', '=', 'departments.id')
            ->join('designations', 'users.Fk_designation', '=', 'designations.id')
            ->where(function ($query) use ($searchQuery) {
                $query->where('users.Name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('departments.Name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('designations.Name', 'like', '%' . $searchQuery . '%');
            })
            ->orderBy('users.name', 'asc')
            ->select('users.*', 'departments.Name as department', 'designations.Name as designation')
            ->get();
        if (is_null($User->first())) {
            return response()->json([
                'status' => 'failed',
                'message' => 'No User found!',
            ], 200);
        }
        $response = [
            'status' => 'success',
            'message' => 'User are retrieved successfully.',
            'data' => $User,
        ];
        return response()->json($response, 200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
