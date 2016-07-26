<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomePageController extends Controller
{
    private function dateToStr($carbon_date)
    {
        return $carbon_date->format('D d M'); //e.g. Tue 12 Jul
    }

    private function getNextMeetingTimeStr()
    {
        //Carbon::setTestNow(new Carbon('2016-07-13 18:21:00.000000'));

        $date = Carbon::now();

        if($date->isTuesday()) {
            $next_tuesday = $date->addDays(7);
            return "Today!<br>and, next " . $this->dateToStr($next_tuesday);
        }

        while(!$date->isTuesday()) $date->addDay();

        return $this->dateToStr($date);
    }

    public function home()
    {
        //dd($date);

        return view('welcome', [
            'next_meeting_time_str' => $this->getNextMeetingTimeStr()
        ]);
    }

    public function watchLivePage()
    {
        return view('watchlive');
    }
}
