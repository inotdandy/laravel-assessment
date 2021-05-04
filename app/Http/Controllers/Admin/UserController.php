<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\UserInviteJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\PostInviteRequest;

class UserController extends Controller
{
    public function createUserInvite(){

        return view('admin.createUserInvite');
    }

    public function storeUserInvite(PostInviteRequest $request){

        $invitation = new UserInviteJob($request->all());
        
        dispatch($invitation);
    }
}
