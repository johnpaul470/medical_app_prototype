<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Client;
use Image;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
         $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        

        $data = DB::table('clients')->orderBy('id', 'desc')->paginate(10);


        return view('admin.Client', compact('data'));
    }

     public function create(Request $request)
    {
        if ($request->isMethod('get')){
            return view('admin.client.add_client');
        }
        
         if($request->hasFile('picture')){

            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(800, 500)->save( public_path('/uploads/food picture/' . $filename ) );
            $rules = [
                //'first_name' => 'required',
                      
            ];
            $this->validate($request, $rules);
            $data = new Client();
            $data->first_name = $request->first_name;
            $data->middle_name = $request->middle_name;
            $data->last_name = $request->last_name;
            $data->email = $request->email;

            //$data->picture = $filename;

            $data->gender = $request->gender;
            $data->date_of_birth = $request->date_of_birth;
            $data->phone_number = $request->phone_number;
            $data->contact_person = $request->contact_person;

            $data->address_street = $request->address_street;
            $data->address_barangay = $request->address_barangay;
            $data->address_city = $request->address_city;
            $data->address_province = $request->address_province;
            $data->address_zip = $request->address_zip;

            $data->category_disease_ailment = $request->category_disease_ailment;
            $data->notes = $request->notes;
            $data->age = \Carbon\Carbon::parse($request->date_of_birth)->age;
            
            $data->member_since = \Carbon\Carbon::now();
            $data->account_id = "For creating user account in JWT token in web app";

            //$data->patient_id = uniqid('client_'.$data->id);
            //$data->philhealth_id = $request->philhealth_id;

            $data->philhealth_id = "SAMPLE DATA";
    
            $data->save();

            DB::table('clients')->where('id', $data->id)->update(['patient_id' => uniqid('client_'.$data->id)]);
  
  
            return redirect('/Client');
            }
            else{
            
          
            $rules = [
                //'first_name' => 'required',
                      
            ];
            $this->validate($request, $rules);
            $data = new Client();
            $data->first_name = $request->first_name;
            $data->middle_name = $request->middle_name;
            $data->last_name = $request->last_name;
            $data->email = $request->email;


            $data->gender = $request->gender;
            $data->date_of_birth = $request->date_of_birth;
            $data->phone_number = $request->phone_number;
            $data->contact_person = $request->contact_person;

            $data->address_street = $request->address_street;
            $data->address_barangay = $request->address_barangay;
            $data->address_city = $request->address_city;
            $data->address_province = $request->address_province;
            $data->address_zip = $request->address_zip;

            $data->category_disease_ailment = $request->category_disease_ailment;
            $data->notes = $request->notes;
            $data->age = \Carbon\Carbon::parse($request->date_of_birth)->age;
            
            $data->member_since = \Carbon\Carbon::now();
            $data->account_id = "For creating user account in JWT token in web app";

            //$data->patient_id = uniqid('client_'.$data->id);
            //$data->philhealth_id = $request->philhealth_id;

            $data->philhealth_id = "SAMPLE DATA";
    
            $data->save();

            DB::table('clients')->where('id', $data->id)->update(['patient_id' => uniqid('client_'.$data->id)]);
  
            return redirect('/Client');
         }       
    }

        public function update(Request $request, $id)
    {

        
         if ($request->isMethod('get')){
            return view('admin.client.add_client', ['data' => Client::find($id)]);
        }
          if($request->hasFile('picture')){

            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(300, 300)->save( public_path('/uploads/food picture/' . $filename ) );

           $rules = [
                //'first_name' => 'required',
                      
            ];
            $this->validate($request, $rules);
            $data = new Client();
            $data->first_name = $request->first_name;
            $data->middle_name = $request->middle_name;
            $data->last_name = $request->last_name;
            $data->email = $request->email;

            //$data->picture = $filename;

            $data->gender = $request->gender;
            $data->date_of_birth = $request->date_of_birth;
            $data->phone_number = $request->phone_number;
            $data->contact_person = $request->contact_person;

            $data->address_street = $request->address_street;
            $data->address_barangay = $request->address_barangay;
            $data->address_city = $request->address_city;
            $data->address_province = $request->address_province;
            $data->address_zip = $request->address_zip;

            $data->category_disease_ailment = $request->category_disease_ailment;
            $data->notes = $request->notes;
            $data->age = \Carbon\Carbon::parse($request->date_of_birth)->age;
            
            $data->member_since = \Carbon\Carbon::now();
            $data->account_id = "For creating user account in JWT token in web app";

            //$data->patient_id = uniqid('client_'.$data->id);
            //$data->philhealth_id = $request->philhealth_id;

            $data->philhealth_id = "SAMPLE DATA";
    
            $data->save();

            DB::table('clients')->where('id', $data->id)->update(['patient_id' => uniqid('client_'.$data->id)]);
  
            return redirect('/Client');
            }

        else {

            $rules = [
                //'first_name' => 'required',
                      
            ];
            $this->validate($request, $rules);
            $data = new Client();
            $data->first_name = $request->first_name;
            $data->middle_name = $request->middle_name;
            $data->last_name = $request->last_name;
            $data->email = $request->email;

            $data->gender = $request->gender;
            $data->date_of_birth = $request->date_of_birth;
            $data->phone_number = $request->phone_number;
            $data->contact_person = $request->contact_person;

            $data->address_street = $request->address_street;
            $data->address_barangay = $request->address_barangay;
            $data->address_city = $request->address_city;
            $data->address_province = $request->address_province;
            $data->address_zip = $request->address_zip;

            $data->category_disease_ailment = $request->category_disease_ailment;
            $data->notes = $request->notes;
            $data->age = \Carbon\Carbon::parse($request->date_of_birth)->age;
            
            $data->member_since = \Carbon\Carbon::now();
            $data->account_id = "For creating user account in JWT token in web app";

            //$data->patient_id = uniqid('client_'.$data->id);
            //$data->philhealth_id = $request->philhealth_id;

            $data->philhealth_id = "SAMPLE DATA";
    
            $data->save();

            DB::table('clients')->where('id', $data->id)->update(['patient_id' => uniqid('client_'.$data->id)]);
  
            return redirect('/Client');


           
            }
               


     }

       public function delete($id)
    {

        

       Client::destroy($id);

        return redirect('/Client');
       

     }
}
