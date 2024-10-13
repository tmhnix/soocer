<?php

namespace App\Models;

class Event extends BaseModel {

    const TIME_STATUS_INCOMING = 0;
    const TIME_STATUS_INPLAY = 1;
    const TIME_STATUS_TO_BE_FIXED = 2;
    const TIME_STATUS_ENDED = 3;
    const TIME_STATUS_POSTPONED = 4;
    const TIME_STATUS_REFUND = 5;

    const TYPE_MAIN = 'main';

    // ENDED: 3,
    // POSTPONED: 4,
    // REFUND: 5
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    protected $fillable = [
        'event_id',
        'parent_id',
        'league_name',
        'type',
        'ss',
        'start_time',
        'time',
        'home',
        'away',
        'extra',
        'reds',
        'start_date',
        'is_manual',
        'league_id',
        'correct_score',
        'is_cs',
        'status',
        'time_status',
        'saba'
    ];

    protected $casts = [
        'timer' => 'json',
        'reds' => 'json',
        'ft_hdp' => 'json',
        'ft_ou' => 'json',
        'hf_hdp' => 'json',
        'hf_ou' => 'json',
        'hf_1x2' => 'json',
        'extra' => 'json',
        'ft_1x2' => 'json',
        'correct_score' => 'json',
    ];

    protected $names = [
        'time_status' => 'Trạng thái',
        'hf_ss' => 'Tỉ số hiệp 1',
        'ss' => 'Tỉ số hiệp 2'
    ];

    public static function validSs($ss, $list_ss) {
        $score = explode('-', $ss);
        if (sizeof($score) !== 2) {
            return false;
        }
        $sum = (int) $score[0] + (int) $score[1];

        $list_ss = $list_ss !== null ? explode(',', $list_ss) : [];
        if (sizeof($list_ss) !== $sum) {
            return false;
        }
        $result = [];
        foreach ($list_ss as $key => $value) {
            if ((string) $value !== '0' && (string)$value !== '1') {
                return false;
            }
            $result[] = (int) $value;
        }
        return $result;
    }

    public function getTimeStatus() {
        return [
            self::TIME_STATUS_INCOMING => 'Sắp diễn ra',
            self::TIME_STATUS_INPLAY => 'Đang chạy',
            self::TIME_STATUS_TO_BE_FIXED => 'Đang treo',
            self::TIME_STATUS_ENDED => 'Hoàn thành',
            self::TIME_STATUS_REFUND => 'Hoàn phí',
        ];
    }

    public function timeStatus() {
        return $this->getTimeStatus()[$this->time_status];
    }

    public function getAttibuteName($key) {
        return isset($this->names[$key]) ? $this->names[$key] : $key;
    }

    public function odds() {
        return $this->hasMany('App\Models\Odd', 'event_id', 'event_id');
    }

    public function bets() {
        return $this->hasMany('App\Models\Bet', 'event_id', 'event_id');
    }

    public function populateOdds($odd_status = 1, $type='single') {
        $query = Odd::where(['event_id' => $this->event_id, 'odd_status' => $odd_status]);
        if ($type === 'multiple') {
            $query = $query->where('is_parlay', true);
        }
        return $query->orderBy('order', 'asc')->get();
    }

    public function logs($user) {
        if ($user->isAdmin()) {
            return;
        }
        $changes = $this->isDirty() ? $this->getDirty() : false;
        if (!$changes) {
            return;
        }
        $result = [];
        foreach ($changes as $key => $value) {
            if ($key == 'extra') {
                continue;
            }
            if ($key == 'time_status') {
                $result[] = [
                    'key' => $key,
                    'name' => $this->getAttibuteName($key),
                    'from' => $this->getTimeStatus()[$this->getOriginal($key)],
                    'to' => $this->getTimeStatus()[$value]
                ];
                continue;    
            }
            $result[] = [
                'key' => $key,
                'name' => $this->getAttibuteName($key),
                'from' => $this->getOriginal($key),
                'to' => $value
            ];
        }

        Log::create([
            'user_id' => $user->id,
            'related_id' => $this->id,
            'type' => Log::TYPE_EVENT,
            'user_name' => $user->username,
            'extra' => $result
        ]);
    }
}
