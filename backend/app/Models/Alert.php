<?php

namespace App\Models;

class Alert extends BaseModel {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'alerts';

    protected $fillable = [
        'username',
        'msg',
        'is_show'
    ];
}
