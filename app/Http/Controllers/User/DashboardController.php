<?php

namespace App\Http\Controllers\User;

use App\Interfaces\Repository;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class DashboardController extends Controller
{
    function __construct(Repository $repository)
    {
       $this->repository =  $repository;
       $this->bladePath = sprintf("user.%s.TShirts",getRoutePrefix());
    }

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
    function allTShirts(){
        return view($this->bladePath,["t_shirts"=>$this->repository->all()]);
    }
    function getTShirt(Model $model){
        dd($this->repository->find($model));
    }
    protected $repository;
    protected $bladePath;
}
