<?php

namespace App\Repositories;

use App\Gender;
use App\Interfaces\Repository;
use Illuminate\Http\Request;

class ManRepository implements Repository
{
    function __construct(Gender $gender,Request $request)
    {
        $this->gender = $gender;
        $this->urlPrefix = substr($request->route()->getPrefix(),1);
        $this->eloquentRelation = strstr(last($request->segments()), '-')!==FALSE
            ? str_replace("-", "_", last($request->segments()))
            : last($request->segments());
    }

    public function all()
    {
        $eloquentRelation = $this->eloquentRelation;
        return $this->gender->getModelByUrlPrefix($this->urlPrefix)->$eloquentRelation->load('colors')->load('images');
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function update(int $id)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    protected $gender;
    protected $eloquentRelation;
    protected $urlPrefix;
}
