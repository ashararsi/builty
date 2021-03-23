<?php

use Illuminate\Support\Facades\DB;

function check()
{

}

function categories()
{
    return DB::table('categories')->where('parent_id', 0)->get();
}

function create_slug()
{
    dd('slug');
 
}





