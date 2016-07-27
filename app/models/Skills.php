<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 7/25/2016
 * Time: 3:15 PM
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Skills extends Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'skills';
    protected $primaryKey = 'skillid';
    protected $dates = ['deleted_at'];
}