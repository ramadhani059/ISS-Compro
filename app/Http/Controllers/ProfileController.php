<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CompanyContact;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function myadminprofile()
    {
        $pageTitle = 'Profile Saya';
        $id = 1;
        $contact = CompanyContact::find($id);

        return view('admin/akun/index', [
            'pageTitle' => $pageTitle,
            'contact' => $contact,
        ]);
    }

    public function editmyadminprofile()
    {
        $pageTitle = 'Edit Profil';

        return view('admin/akun/edit', [
            'pageTitle' => $pageTitle,
        ]);
    }

    public function updatemyadminprofile(Request $request, $id)
    {
        $user = User::find($id);

        // dd(date(now()));
        $user->email = $request->email;
        if ($request->password_edit != null) {
            $user->password = Hash::make($request->password_edit);
        }
        $user->name = $request->name;
        $user->updated_at = date(now());
        $user->save();
        return redirect()->route('myprofile');
    }
}
