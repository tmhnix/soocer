<?php

namespace App\Models;

class League extends BaseModel {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leagues';

    protected $fillable = [
        'league_id',
        'status',
        'name',
        'cc',
        'order',
        'isCS'
    ];



    public function listInPlayEvents($time_status = 1, $type = 'single') {
        $query = Odd::where([   
                'odds.league_id' => $this->league_id,
                'odds.odd_status' => $time_status
            ])->join('events', 'events.event_id', '=', 'odds.event_id');
        if ($type === 'multiple') {
            $query = $query->where('odds.is_parlay', true);
        }
        return $query->orderBy('odds.order', 'asc')->get();
    }

    public function listEvents() {
        return Event::where(['league_id' => $this->league_id])->orderBy('order', 'asc')->get();
    }

    public function populateEvents($time_status = 1) {
        return Event::where(['league_id' => $this->league_id, 'time_status' => $time_status, 'status' => 'active'])->orderBy('order', 'asc')->get();
    }
}
