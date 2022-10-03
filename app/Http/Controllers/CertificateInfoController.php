<?php

namespace App\Http\Controllers;

use App\Models\CertificateInfo;
use Illuminate\Http\Request;

class CertificateInfoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        // dd($request->all());
        $data = $request->validate(
            [
                // 'user_id'=>['required'],
                'fname' => ['required', 'string', 'max:255'],
                'mname' => ['required', 'string', 'max:255'],
                'board' => ['required', 'string', 'max:255'],
                'group' => ['required', 'string', 'max:255'],
                'dob' => ['required', 'string', 'max:255'],
                'roll' => ['required', 'string', 'max:255'],
                'registrationNo' => ['required', 'string', 'max:255'],
                'gpaaditional' => ['required', 'string', 'max:255'],
                'gpa' => ['required', 'string', 'max:255'],
                
            ]
        );
        // dd($request->session()->get('user')->id);
            $data['user_id']=$request->session()->get('user')->id;
            
        
        if ($data){
           
            $user = CertificateInfo::create($data);
            $request->session()->put('user', $user);
            return redirect()->to('/confirmmsg');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificateInfo  $certificateInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CertificateInfo $certificateInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificateInfo  $certificateInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateInfo $certificateInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CertificateInfo  $certificateInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificateInfo $certificateInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificateInfo  $certificateInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateInfo $certificateInfo)
    {
        //
    }
}
