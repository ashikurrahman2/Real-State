<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


// public function updateProfileImage(Request $request): RedirectResponse
// {
//     $request->validate([
//         'user_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     $user = Auth::user();

//     if ($request->hasFile('user_image')) {
//         // পুরানো ইমেজ ডিলিট করুন
//         if ($user->user_image && Storage::exists('public/' . $user->user_image)) {
//             Storage::delete('public/' . $user->user_image);
//         }

//         // নতুন ইমেজ আপলোড করুন
//         $path = $request->file('user_image')->store('users', 'public');
//         $user->user_image = $path;
//         $user->save();
//     }
//     // $abouts = About::get();
//     return Redirect::route('profile.edit')->with('status', 'profile-image-updated');
// }
}
