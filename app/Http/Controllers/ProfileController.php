<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;
use Egulias\EmailValidator\Validation\RFCValidation;
use App\Models\Profile;

class ProfileController extends Controller
{
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function profileIndex() {
        if(Session::get('loginAdmin')) {
            $profiles = Profile::get();
            return \view('admin.content.company_profile', compact('profiles'));
        }else {
            return \redirect('/admin/login');
        }
    }

    public function profileUpdate(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }

        try{
            $countProfile = Profile::get()->count();
            if($countProfile < 1) {
                $this->validate($request, [
                    'company_name' => '|required',
                    'company_email' => '|required',
                    'company_phone' => '|required|max:12',
                    'company_logo' => '|required|image|mimes:jpeg,jpg,png,gif',
                    'company_address' => '|required',
                    'company_description' => '|required'
                ]);

                $validator = new EmailValidator;
                $multipleValidations = new MultipleValidationWithAnd([
                    new RFCValidation,
                    new DNSCheckValidation,
                ]);
                $validator = $validator->isValid($request->company_email, $multipleValidations);
                if($validator == false){
                    return \redirect()->back()->with('alert-danger', 'Email not valid!');
                }

                $profile = new Profile();
                $profile->profile_id = $this->generateRandomString(16);
                $profile->company_name = $request->company_name;
                $profile->company_email = $request->company_email;
                $profile->company_phone = $request->company_phone;
                $uploadedFileUrl = cloudinary()->upload($request->file('company_logo')->getRealPath())->getSecurePath();
                $profile->company_logo = $uploadedFileUrl;
                $profile->company_address = $request->company_address;
                $profile->company_description = $request->company_description;
                if(!$profile->save()) {
                    return \redirect()->back()->with('alert-danger', 'Save Profile Failed');
                }
                return \redirect()->back()->with('alert-success', 'Save Profile Success');
            }

            $profile = Profile::first();
            if($request->has('company_name')) {
                $profile->company_name = $request->company_name;
            }
            if($request->has('company_email')) {
                $validator = new EmailValidator;
                $multipleValidations = new MultipleValidationWithAnd([
                    new RFCValidation,
                    new DNSCheckValidation,
                ]);
                $validator = $validator->isValid($request->company_email, $multipleValidations);
                if($validator == false){
                    return \redirect()->back()->with('alert-danger', 'Email not valid!');
                }
                $profile->company_email = $request->company_email;
            }
            if($request->has('company_phone')) {
                $profile->company_phone = $request->company_phone;
            }
            if($request->has('company_logo')) {
                $uploadedFileUrl = cloudinary()->upload($request->file('company_logo')->getRealPath())->getSecurePath();
                $profile->company_logo = $uploadedFileUrl;
            }
            if($request->has('company_address')) {
                $profile->company_address = $request->company_address;
            }
            if($request->has('company_description')) {
                $profile->company_description = $request->company_description;
            }
            if(!$profile->save()) {
                return \redirect()->back()->with('alert-danger', 'Save Profile Failed');
            }

            return \redirect()->back()->with('alert-success', 'Save Profile Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
