<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    /**
     * Consultants Relationship
     *
     * A Contract has Many Consultants
     * 
     * @return Eloquent Relationship
     */
    public function consultants()
    {
    	return $this->hasMany('App\Models\Consultant');
    }
}
