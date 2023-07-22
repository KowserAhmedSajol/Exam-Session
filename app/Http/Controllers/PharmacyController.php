<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pharmacy;
use App\Models\BuyMedicine;
use Session;
class PharmacyController extends Controller
{
    public function list(){
        $medicines = Pharmacy::all();
        return view('admin.pharmacy.list', compact('medicines'));
    }
    public function insert(Request $req)
    {
        $pharmacy = new Pharmacy;
        $pharmacy->name = $req->name;
        $pharmacy->price = $req->price;
        if($req->hasFile('image')){
            $file = $req->file('image');
            $filename = uniqid(). $file->getClientOriginalName();
            $file->move('uploads/images/pharmacy', $filename);
            $pharmacy->image = $filename;
        }
        $pharmacy->save();
        Session::flash('message', 'Medicine has been added Successfully');
        return redirect()->route('pharmacy_list');
    }
    public function delete(Request $req){
        $pharmacy = Pharmacy::find($req->id);
        $pharmacy->delete();
        Session::flash('message', 'Medicine has Deleted Successfully');
        return redirect()->route('pharmacy_list');
    }
    public function edit(Request $req){
        $medicine = Pharmacy::find($req->id);
        return view('admin.pharmacy.edit', compact('medicine'));
    }
    public function update(Request $req)
    {
        $medicine = Pharmacy::find($req->id);
        $medicine->name = $req->name;
        $medicine->price = $req->price;
        if($req->hasFile('newimage')){
            $destination = public_path('uploads/images/pharmacy/'.$req->oldimage);
            if(file_exists($destination))
            {
                unlink($destination);
            }
            $file = $req->file('newimage');
            $filename = uniqid(). $file->getClientOriginalName();
            $file->move('uploads/images/pharmacy', $filename);
            $medicine->image = $filename;
        }
        $medicine->update();
        Session::flash('message', 'Medicine information has been updated Successfully');
        return redirect()->route('pharmacy_list');
    }
    // ---------------------------------------------------------------------
    // For users 
    // ---------------------------------------------------------------------
    public function userlist(){
        $medicines = Pharmacy::all();
        return view('user.pharmacy.list', compact('medicines'));
    }
    public function userview(Request $req){
        
        $medicine = Pharmacy::find($req->id);
        return view('user.pharmacy.view', compact('medicine'));
    }
    public function medicineBuy(Request $req){
        $medicine = new BuyMedicine;
        $medicine->name = $req->name;
        $medicine->shipping_address = $req->address;
        $medicine->phone = $req->phone;
        $medicine->MedicineId = $req->id;
        $medicine->userId = $req->userid;
        $medicine->save();
        Session::flash('message', 'Bought Successfully');
        return redirect()->route('user_pharmacy_list');
    }
    public function medicineBuylist()
    {
        dd('hello');
    }
}