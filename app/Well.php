<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Well extends Model
{
    protected $fillable = ['uwi', 'MD', 'state', 'description', 'user_id'];

    /**
     * a well can only be created by one user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }


}
