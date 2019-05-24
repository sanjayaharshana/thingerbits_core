<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class Lmscontroller extends Controller
{

    public function getcourses()
    {
        return view('public.account.lms.index');
    }
}