<?php

namespace App\Http\Controllers;

use App\Models\sensors;
use App\Models\settings;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Ramsey\Uuid\Type\Time;

class SensorsController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function refresh()
    {
        return view('refresh');
    }

    public function insert(Request $request)
    {
        if ($request->apikey == "1") {
            date_default_timezone_set("Asia/Manila");
            $getsettings = settings::find(1);


            try{
              $sensor = new Sensors();
              $sensor->t1 = $request->ht1;
              $sensor->t2 = $request->ht2;
              $sensor->t3 = $request->ht3;
              $sensor->t4 = $request->ht4;
              $sensor->t5 = $request->ht5;
              $sensor->t6 = $request->ht6;
              $sensor->h1 = $request->hh1;
              $sensor->h2 = $request->hh2;
              $sensor->h3 = $request->hh3;
              $sensor->h4 = $request->hh4;
              $sensor->h5 = $request->hh5;
              $sensor->h6 = $request->hh6;
              $sensor->sm1 = $request->sm1;
              $sensor->sm2 = $request->sm2;
              $sensor->sm3 = $request->sm3;
              $sensor->sm4 = $request->sm4;
              $sensor->sm5 = $request->sm5;
              $sensor->sm6 = $request->sm6;
              $sensor->sm7 = $request->sm7;
              $sensor->sm8 = $request->sm8;
              $sensor->sm9 = $request->sm9;
              $sensor->sm10 = $request->sm10;
              $sensor->sm11= $request->sm11;
              $sensor->sm12= $request->sm12;
              $sensor->save();
            }catch (Exception $e){
                print $e;
            }

            if ($getsettings->autolight) {
                if (Date('H:i', strtotime(now())) == Date('H:i', strtotime($getsettings->lighton))) { //1 and 3 on  0
                    settings::find(1)->update(['lightstatus' => 1]);
                    echo ";turnLIGHTON;";
                } else if (Date('H:i', strtotime(now())) == Date('H:i', strtotime($getsettings->lightoff))) { //1 and 3 on  0
                    settings::find(1)->update(['lighton' => 0]);
                    echo ";turnLIGHTOFF;";
                }
            } else {
                if ($getsettings->lightstatus == 0) {
                    echo ";turnLIGHTOFF;";
                } else {
                    echo ";turnLIGHTON;";
                }
            }
            $harray = array($request->h1,$request->h2,$request->h3,$request->h4,$request->h5,$request->h6);
            if ($getsettings->autosprinkler) {

                if (min($harray) < $getsettings->humiditybelow || Date('H:i', strtotime(now())) == Date('H:i', strtotime($getsettings->sprinkleron))) { //1 and 3 on  0
                    settings::find(1)->update(['sprinklerstatus' => 1]);
                    echo ";turnsprinklerON;";
                } else if (min($harray)  > $getsettings->humidityabove ||Date('H:i', strtotime(now())) == Date('H:i', strtotime($getsettings->sprinkleroff))) { //1 and 3 on  0
                    settings::find(1)->update(['sprinklerstatus' => 0]);
                    echo ";turnsprinklerOFF;";
                }
            } else {
                if ($getsettings->sprinklerstatus == 0) {
                    echo ";turnsprinklerOFF;";
                } else {
                    echo ";turnsprinklerON;";
                }
            }

            $tarray = array($request->t1,$request->t2,$request->t3,$request->t4,$request->t5,$request->t6);
            if ($getsettings->autofan) {

                if (min($tarray) < $getsettings->tempbelow) { //1 and 3 on  0
                    settings::find(1)->update(['fanstatus' => 1]);
                    echo ";turnFanON;";
                } else if (min($tarray)  > $getsettings->tempabove) { //1 and 3 on  0
                    settings::find(1)->update(['fanstatus' => 0]);
                    echo ";turnFanOFF;";
                }
            } else {
                if ($getsettings->fanstatus == 0) {
                    echo ";turnFanOFF;";
                } else {
                    echo ";turnFanON;";
                }
            }






        } else {
            return abort(401);
        }


//        return 200;

    }
}
