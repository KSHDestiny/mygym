<?php

namespace App\Http\Controllers;

use App\Models\ScheduledClass;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create() {
        $scheduledClasses = ScheduledClass::with('classType','instructor')->where('date_time', '>', now())->oldest()->get();
        return view('member.book')->with('scheduledClasses', $scheduledClasses);
    }
}
