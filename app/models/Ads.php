<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 7/26/2016
 * Time: 11:21 AM
 */

use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Ads extends Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'ad';
    protected $primaryKey = 'jobid';
    protected $dates = ['deleted_at'];
}