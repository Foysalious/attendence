<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App;
use App\Services\UserService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{


    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {

        $users = $this->userService->index();
        return view('backend.pages.user.manage', compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        if( File::exists('images/gallery/'. $user->image) ){
            File::delete('images/gallery/'. $user->image);
        }
        $user->delete();
        return redirect()->route('user-list');
    }

    protected function createUser(Request $request)
    {
        $user = new User();
        if ($request->pro_pic) {
            $image = $request->file('pro_pic');
            $img = time() . Str::random(12) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/gallery/' . $img);
            Image::make($image)->save($location);
            $user->pro_pic = $img;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user-list');
    }


    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        if ($request->pro_pic) {
            if (File::exists('images/gallery' . $user->pro_pic)) {
                File::delete('images/gallery' . $user->pro_pic);
            }
            $image = $request->file('pro_pic');
            $img = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $img);
            Image::make($image)->save($location);
            $user->pro_pic = $img;
        }
        $user->save();
        return redirect()->route('user-list');

    }
}
