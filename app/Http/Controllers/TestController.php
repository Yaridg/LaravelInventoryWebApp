<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function AddUsers ()
    {

        $user_name = "john doe";
        $user_password = "IT";
        $user_auth = "admin";

        if((is_string($user_name) && is_string($user_password)) && $user_auth == "admin")
        {
            //add user
            return 'Success';
        }
        else
        {
            return 'Fail';
        }

    }

    public function RemoveStock()
    {
        $lumberQrCode = "pine 4x4";

        if($lumberQrCode !== null)
        {
            if($lumberQrCode == "pine 4x4")
            {
                return 'Success';
            }
            else
            {
                return 'Fail';
            }

        }
        else
        {
            $lumber_type = "pine";
            $size = "4x4";
            $amount = 10;

            if( $lumber_type = "pine" && $size ="4x4")
            {
                return 'Success';
            }
            else
            {
                return 'Fail';
            }
        }

    }


    public function removeUser()
    {
        $user_id = 1;

        if($user_id = 1)
        {
            return 'Success';
        }
        else
        {
            return 'Fail';
        }

    }

}
