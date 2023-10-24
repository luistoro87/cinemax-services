<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use App\Models\Constant;
use Illuminate\Support\Facades\Response;

class SocialNetworkController extends Controller
{
    public function getAllSocialNetwork()
    {
        try {
            $socialNetworks = SocialNetwork::getSocialNetworkAll();
            return Response::json(['status' => true, 'message' => '', 'data' => $socialNetworks]);
            } catch (\Exception $ex) {
                return $this->responseJson(false, $ex->getMessage(), [], Constant::HTTP_CODE_INTERNAL_SERVER_ERROR);
            }
    }
}
