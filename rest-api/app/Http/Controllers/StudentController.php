<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        # Menggunakan model Student untuk select data
        $students = Student::all();

        if(!empty($students)){
            $response = [
                'message' => 'Menampilkan Data semua Student',
                'data' => $students,
            ];
            return response()->json($response, 200);
        } else { 
            $response = [
                'message' => 'Data tidak ada',
            ];
            return response()->json($response,200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input = [
		// 	'nama' => $request->nama,
		// 	'nim' => $request->nim,
		// 	'email' => $request->email,
		// 	'jurusan' => $request->jurusan
		// ];

        $student = Student::create($request->all());
        
        $response = [
            'message' => 'Data Student Berhasil dibuat',
            'data' => $student,
        ];
        return response()->json($request,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);

        if ($student) {
            $response = [
                'message' => 'Get detail student',
                'data' => $student
            ];
            
            return response()->json($response, 200);
        } else {
            $response = [
                'message' => 'Data not found'
            ];
            
            return response()->json($response, 404);
        }
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
        $student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Student is updated',
				'data' => $student->update($request->all())
			];
	
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Student is delete',
				'data' => $student->delete()
			];

			return response()->json($response, 200); 
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
    }
}
