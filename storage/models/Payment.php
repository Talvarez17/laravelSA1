<?php

namespace App;

/**
 * Eloquent class to describe the payment table.
 *
 * automatically generated by ModelGenerator.php
 */
class Payment extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'payment';

    public $primaryKey = '';

    public $incrementing = false;

    protected $fillable = ['payment_id', 'customer_id', 'staff_id', 'rental_id', 'amount', 'payment_date'];

    public function getDates()
    {
        return ['payment_date'];
    }
}
