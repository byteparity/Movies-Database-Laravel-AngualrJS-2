<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class UserController
 * @package App\Http\Controllers\API
 */

class SendmailController extends AppBaseController
{
    public function sendContactUsMail(Request $request)
    {
		return 'sagar';
        //return $this->sendResponse($users->toArray(), 'Users retrieved successfully');
    }

    
}
