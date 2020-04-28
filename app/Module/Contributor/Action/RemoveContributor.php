<?php

namespace DigitalClosuxe\Module\Contributor\Action;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class RemoveContributor
 *
 * @package DigitalClosuxe\Module\Contributor\Action
 */
class RemoveContributor extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function invokeAction(Request $request)
    {
        return new JsonResponse($request->all(), 200);
    }
}