<?php

namespace App\Http\Controllers;

use App\Models\CompanyContact;
use Illuminate\Http\Request;

class CompanyContactController extends Controller
{
    public function updatecompanycontact(Request $request, $id)
    {
        // dd($request);
        $contact = CompanyContact::find($id);

        // dd(date(now()));
        $contact->phone = $request->phone;
        $contact->content = $request->content;
        $contact->save();
        return redirect()->route('myprofile');
    }
}
