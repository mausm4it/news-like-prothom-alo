<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function maanCompanyIndex()
    {

        $companies = Company::paginate(10);
        return view('admin.pages.settings.company.index',compact('companies'));
    }

    public function maanCompanyStore(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address_line1'=>'required',
           
            'email'=>'required',
           

        ]);
        $companies                  = new Company();
        $companies->name            = $request->name;
        $company->publisher_name    = $request->publisher_name;
        $company->executive_editor_name = $request->executive_editor_name;
        $company->joit_editor_name  = $request->joit_editor_name;
        $companies->address_line1   = $request->address_line1;
        $companies->address_line2   = $request->address_line2;
        $companies->phone           = $request->phone;
        $companies->mobile           = $request->mobile;
        $companies->email           = $request->email;
        $companies->location_map    = $request->location_map;
        $companies->message         = $request->message;
        $companies->save();
        //message..
        $this->setSuccess('Inserted');

        return redirect()->route('admin.company.index');


    }

    public function maanCompanyUpdate(Request $request, Company $company)
    {
        $request->validate([
            'name'=>'required',
            'address_line1'=>'required',
          
            'email'=>'required',
            

        ]);

        $company->name            = $request->name;
        $company->publisher_name    = $request->publisher_name;
        $company->executive_editor_name = $request->executive_editor_name;
        $company->joit_editor_name  = $request->joit_editor_name;
        $company->address_line1   = $request->address_line1;
        $company->address_line2   = $request->address_line2;
        $company->phone           = $request->phone;
        $company->mobile           = $request->mobile;
        $company->email           = $request->email;
        $company->location_map    = $request->location_map;
        $company->message         = $request->message;
        $company->save();
        //message..
        $this->setSuccess('Updated');

        return redirect()->route('admin.company.index');
    }

    public function maanCompanyDestroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.company.index');

    }
}
