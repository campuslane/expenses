<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $table = "consultants";

    /**
     * Employer Relationship
     *
     * A consultant belongs to an employer
     * 
     * @return Eloquent Relationship
     */
    public function employer()
    {
    	return $this->belongsTo('App\Models\Employer');
    }

    /**
     * Expenses Relationship
     *
     * A consultant has many expenses
     * 
     * @return Eloquent Relationship
     */
    public function expenses()
    {
    	return $this->hasMany('App\Models\Expense');
    }


}
