<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;

use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    public function getAllSocialNetwork()
    {
        return SocialNetwork::getSocialNetworkAll();
    }
}
