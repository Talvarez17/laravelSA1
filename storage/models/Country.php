<?php

namespace App;

/**
 * Eloquent class to describe the country table.
 *
 * automatically generated by ModelGenerator.php
 */
class Country extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'country';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = ['country_id', 'country'];
}