<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 8/1/2016
 * Time: 3:11 PM
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class OtherDuty extends Eloquent
{
    protected $table = 'ohter';
    protected $primaryKey = 'otherid';
    protected $date =  ['deleted_at'];
}