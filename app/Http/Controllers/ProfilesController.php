<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        return view('profiles.index', [
            'user' => $user,
            'follows' => $follows,
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        auth()->user()->profile->update($data);

        if (request('image')) {
            $ImagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path('storage/' . $ImagePath))->fit(1000, 1000);
            $image->save();
            $imageArr = ['image' => $ImagePath];
        }
        auth()->user()->profile->update(
            array_merge($data, $imageArr ?? []),
        );

        return redirect('/profile/' . $user->id);
    }
}
