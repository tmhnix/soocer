<?php

namespace App\Models;

class Odd extends BaseModel {

    const TIME_STATUS_INCOMING = 0;
    const TIME_STATUS_INPLAY = 1;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'odds';

    protected $fillable = [
        'event_id',
        'odd_id',
        'league_id',
        'is_manual',
        'type',
        'ft_hdp',
        'ft_ou',
        'ft_1x2',
        'hf_hdp',
        'hf_ou',
        'hf_1x2'
    ];

    protected $casts = [
        'timer' => 'json',
        'ft_hdp' => 'json',
        'ft_ou' => 'json',
        'hf_hdp' => 'json',
        'hf_ou' => 'json',
        'hf_1x2' => 'json',
        'extra' => 'json',
        'reds' => 'json',
        'ft_1x2' => 'json',
       
    ];

    public function event() {
        return $this->hasOne('App\Models\Event', 'event_id', 'event_id');
    }

    public function getEventJson() {
        return Event::where('event_id', $this->event_id)->select('name');
    }

    public function calFtHdp() {
        $this['ft_hdp']['handicap_team'] = 'home';
//        $odd['ft_hdp']['handicap_value'] = (float) $odd['ft_hdp']['handicap_value'];
//        $odd['ft_hdp']['handicap'] = $odd['ft_hdp']['handicap_value'];
    }

    public function getBetWithType($position, $type) {
        $odd = $this[$type];
        if (in_array($type, ['ft_hdp', 'hf_hdp', 'hf_1x2', 'ft_1x2'])) {
            if ($position == 0) {
                return $odd['home_od'];
            }

            return $position == 1 ? $odd['away_od'] : $odd['draw_od'];
        }

        return $position == 0 ? $odd['over_od'] : $odd['under_od'];
    }

    public static function findFullByOddId($id) {
        return self::where('odd_id', $id)->join('events', 'events.event_id', '=', 'odds.event_id')->first();
    }
}
