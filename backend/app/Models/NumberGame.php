<?php

namespace App\Models;

class NumberGame extends BaseModel {

    const TIME_STATUS_INCOMING = 0;
    const TIME_STATUS_INPLAY = 1;
    const TIME_STATUS_TO_BE_FIXED = 2;
    const TIME_STATUS_ENDED = 3;
    const TIME_STATUS_POSTPONED = 4;
    const TIME_STATUS_REFUND = 5;

    // ENDED: 3,
    // POSTPONED: 4,
    // REFUND: 5
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'number_games';

    protected $fillable = [
        'event_id',
        'name',
        'data'
    ];

    protected $casts = [
        'data' => 'json',
        'ball_numbers' => 'array'
    ];

    protected $names = [
        'time_status' => 'Trạng thái',
        'hf_ss' => 'Tỉ số hiệp 1',
        'ss' => 'Tỉ số hiệp 2'
    ];
}
