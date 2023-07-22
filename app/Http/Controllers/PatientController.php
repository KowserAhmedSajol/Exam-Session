<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Session;

class PatientController extends Controller
{
    public function list(){
        
        $patients = Patient::all();
        return view('admin.patient.list', compact('patients'));
    }
    public function insert(Request $req)
    {
        $patient = new Patient;
        $patient->uuid = Str::uuid();
        $patient->patient_name = $req->name;
        $patient->age = $req->age;
        $patient->address = $req->address;
        $patient->phone = $req->phone;
        $patient->date = $req->date;
        $patient->room = $req->room;
        $patient->bill = '';
        $patient->status = 'Admitted';
        $patient->status_color = 'badge-success';
       
        $patient->save();
        Session::flash('message', 'Patient has been added Successfully');
        return redirect()->route('patient_list');
    }

    public function edit(Request $req)
    {
        $editData = Patient::find($req->id); 
        return view('admin.patient.edit', compact('editData'));
    }

    public function update(Request $req)
    {
        $patient = Patient::find($req->id);
        $patient->uuid = $req->uuid;
        $patient->patient_name = $req->name;
        $patient->age = $req->age;
        $patient->address = $req->address;
        $patient->phone = $req->phone;
        $patient->date = $req->date;
        $patient->room = $req->room;
        $patient->bill = $req->bill;
        $patient->status = $req->status;
        $patient->status_color = $req->color;
       
        $patient->update();
        Session::flash('message', 'Patient information has been updated Successfully');
        return redirect()->route('patient_list');
    }

    public function updateStatus(Request $req)
    {
        $patient = Patient::find($req->id);
        if($patient->status=='Admitted' && $patient->status_color=='badge-success')
        {
            $patient->status_color = 'badge-secondary';
            $patient->status = 'Discharged';
        }
        $patient->update();
        Session::flash('message', 'Patient status is updated Successfully');
        return redirect()->route('patient_list');
    }

    public function delete(Request $req){
        Patient::find($req->id)->delete();
        Session::flash('message', 'patient has been deleted Successfully');
        return redirect()->route('patient_list');
    }
}
