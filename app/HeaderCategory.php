<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderCategory extends Model
{
    protected $primaryKey = 'headerCategoryID';

    protected $fillable = ['consultantID', 'categoryID', 'price'];
}
