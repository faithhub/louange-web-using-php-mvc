<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Affiliate extends Eloquent
{
  protected $fillable = ['name', 'link', 'avatar'];
}
