<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Resource1 extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return ['writer_name'=>$this->writer_name];
        return parent::toArray($request);
    }
}
