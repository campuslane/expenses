<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	/**
	 * Expenses Relationship
	 * 
	 * A Report has Many Expenses
	 * 
	 * @return Eloquent Relationship
	 */
    public function expenses()
    {
    	return $this->hasMany('App\Models\Expense');
    }

    /**
     * Contract Relationship
     *
     * A Report has One Contract
     * 
     * @return Eloquent Relationship
     */
    public function contract()
    {
    	return $this->hasOne('App\Models\Contract');
    }

    /**
     * Consultant Relationship
     *
     * A Report has One Consultant
     * 
     * @return  Eloquent Relationship
     */
    public function consultant()
    {
    	return $this->hasOne('App\Models\Consultant');
    }
}
