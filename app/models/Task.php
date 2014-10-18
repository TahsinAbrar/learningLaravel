<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 10/18/2014
 * Time: 11:33 AM
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Task extends Eloquent {
    use SoftDeletingTrait;
    protected $softDelete = true;
} 