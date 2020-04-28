<?php

namespace DigitalClosuxe\Module\Contributor\Action;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class AddContributor
 *
 * @package DigitalClosuxe\Module\Contributor\Action
 */
class AddContributor extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function invokeAction(Request $request)
    {
        return new JsonResponse(['message' => 'yey'], 200);
    }
}