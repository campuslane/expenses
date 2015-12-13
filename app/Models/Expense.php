<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';

    /**
     * Report Relationship
     *
     * An Expense belongs to a Report
     * 
     * @return Eloquent Relationship
     */
    public function report()
    {
    	return $this->belongsTo('App\Models\Report');
    }

    /**
     * Consultant Relationship
     *
     * An Expense belongs to a Consultant
     * 
     * @return Eloquent Relationship
     */
    public function consultant()
    {
    	return $this->belongsTo('App\Models\Consultant');
    }
}
