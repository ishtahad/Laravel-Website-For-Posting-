<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name. the table name which was created 
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps, table has created at fields if we don't want those then we can say timestamps to false.
    public $timestamps = true;
}
