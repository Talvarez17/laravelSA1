<?php

namespace App;

/**
 * Eloquent class to describe the film_actor table.
 *
 * automatically generated by ModelGenerator.php
 */
class FilmActor extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'film_actor';

    public $primaryKey = '';

    public $incrementing = false;

    protected $fillable = ['actor_id', 'film_id'];
}