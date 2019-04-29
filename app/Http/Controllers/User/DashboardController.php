<?php

namespace App\Http\Controllers\User;

use App\Interfaces\Repository;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct(Repository $repository)
    {
       $this->repository =  $repository;
       $this->bladePathDir = sprintf("user.%s",getRoutePrefix());
    }

    function index(){
        /*$arr = [
          [1,2,8,12,13,14,15],
            [1,2,5,7,8,12,13,15],
            [1,15],
            [1,2,7,8,13,15],
        ];
        foreach ($arr as $key=>$value){
            foreach ($value as $v){
                $k = $key+6;
                file_put_contents('D:\temp\OSPanel\domains\cottonWorld.local\database\scripts\new_install\insert\fill_T_shirts_color.sql',"INSERT INTO t_shirt_color(`t_shirt_id`,`color_id`,`created_at`,`updated_at`)
values($k,$v,now(),now());\r\n",FILE_APPEND);
            }
        }*/
        return view('user.user_dashboard');
    }
    function allTShirts(){
        //dd(getBladePath());
        return view($this->bladePathDir.".t-shirts",["t_shirts"=>$this->repository->all()]);
    }
    function getTShirt(Model $model){
        return view($this->bladePathDir.".product_article",["t_shirt"=>$this->repository->find($model)]);
    }
    protected $repository;
    protected $bladePathDir;
}
