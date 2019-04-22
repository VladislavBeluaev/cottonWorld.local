<?php

namespace App\Http\Controllers\User;

use App\Gender;
use App\Interfaces\Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index(){
        /*$arr = [
          [1,2,5,7,8,9,10,11,12,13,15,16],
            range(1,16),
            [1,2,13,15],
            range(1,16),
            [1,13]

        ];
        foreach ($arr as $key=>$value){
            foreach ($value as $v){
                $k = $key+1;
                file_put_contents('D:\2016-05-16\OP\OSPanel\domains\cottonWorld.local\database\scripts\new_install\insert\fill_T_shirts_color.sql',"INSERT INTO t_shirt_color(`t_shirt_id`,`color_id`,`created_at`,`updated_at`)
values($k,$v,now(),now());\r\n",FILE_APPEND);
            }
        }*/
        return view('user.user_dashboard');
    }
    function menTShirts(Repository $menRepository){

        return view('user.men.TShirts',["t_shirts"=>$menRepository->all()]);
    }
}
