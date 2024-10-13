<?php

namespace App\Models;

use App\Components\OddsConverter;

class Bet extends BaseModel {

    const STATUS_PENDING = 'pending';
    const STATUS_RUNING = 'runing';
    const STATUS_CANCEL = 'cancel';
    const STATUS_DONE = 'done';
    const STATUS_REFUND = 'refund';
    const STATUS_UNUSUAL_BETS = 'unusual_bets';

    const BET_STATUS_WON = 'won';
    const BET_STATUS_LOSE = 'lose';
    const BET_STATUS_DRAW = 'draw';
    const BET_STATUS_REFUND = 'refund';

    const KIND_ITEM = 'item';
    const KIND_GROUP = 'group';
    const KIND_NORMAL = 'normal';

    const ODD_TYPE_DECIMAL = 'decimal';
    const ODD_TYPE_MALAY = 'malay';

    const GAME_TYPE_BINGO = 'bingo';
    const GAME_TYPE_BONGDA = 'bongda';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bets';

    protected $fillable = [
        'user_id',
        'event_id',
        'number_id',
        'number_code',
        'number_step',
        'game_type',
        'group_id',
        'ip_address',
        'bet_kind',
        'odd_id',
        'odd_type',
        'bet_amount',
        'bet_pre_pay',
        'bet_value',
        'bet_position',
        'type',
        'bet_profit',
        'bet_commission',
        'bet_type',
        'bet_status',
        'has_full',
        'time_status',
        'time_position',
        'odd',
        'time',
        'ss',
        'last_ss',
        'version',
        'reds',
        'created_at'
    ];

    protected $casts = [
        'odd' => 'json',
        'event' => 'json',
        'stake' => 'double',
        'profit' => 'double',
        'bet_amount' => 'double',
        'bet_profit' => 'double',
        'bet_commission' => 'double',
        'commission' => 'double',
        'reds' => 'json'
    ];

    protected $names = [
        'time_position' => 'Tài/xỉu or Chủ/Khách',
        'bet_amount' => 'Tiền cược',
        'bet_commission' => 'Hòa hồng',
        'bet_value' => 'Tỉ lệ kèo',
        'ss' => 'Tỉ số lúc đánh',
        'last_ss' => 'Tỉ số hết trận (H1/H2)',
        'bet_profit' => 'Tiền thắng/thua',
        'bet_status' => 'Trạng thái',
        'has_full' => 'Tiền thắng/thua trắng?'
    ];

    public function updateParent($user) {
        $list = $user->getParentIds();
        $this->agent_id = $list[3];
        $this->master_id = $list[2];
        $this->super_id = $list[1];
    }

    public function getJson() {
        $result = $this->betsJson();
        return (object) array(
            'id' => $this->id,
            'event_id' => $this->event_id,
            'number_code' => $this->number_code,
            'ip_address' => $this->ip_address,
            'bet_amount' => $this->bet_amount,
            'bet_kind' => $this->bet_kind,
            'bet_position' => $this->bet_position,
            'bet_value' => $this->getBetValue(),
            'bet_status' => $this->bet_status,
            'bet_status_name' => $this->getBetStatusName(),
            'bet_profit' => $this->bet_profit,
            'status' => $this->status,
            'status_name' => $this->getStatusName(),
            'bet_commission' => $this->bet_commission,
            'bet_odd' => $this->getBetOdd(),
            'game_type' => $this->getGameType(),
            'home' => $this->event ? $this->event->home : '',
            'away' => $this->event ? $this->event->away : '',
            'league_name' => $this->event ? $this->event->league_name : '',
            'ss' => $this->ss,
            'last_ss' => $this->last_ss,
            'user_id' => $this->user->id,
            'username' => $this->user->username,
            'online' => $this->user->online,
            'date' => format_date_pretty($this->created_at),
            'bet_type' => $this->getBetType(),
            'bet_type_raw' => $this->bet_type,
            'type' => $this->type,
            'bet_name' => $this->getBetName(),
            'rate' => $result->rate,
            'bets' => $result->bets,
            'is_group' => $this->isGroup()
        );
    }

    public function getBetStatusName() {
        if ($this->status === self::STATUS_CANCEL) {
            return 'Cược hủy';
        }
        if ($this->status !== self::STATUS_DONE) {
            return 'Đang chạy';
        }
        if ($this->bet_status == self::BET_STATUS_WON) {
            if ($this->has_full) {
                return 'Thắng';
            } else {
                return 'Thắng nửa';
            }
        }

        if ($this->bet_status == self::BET_STATUS_LOSE) {
            if ($this->has_full) {
                return 'Thua';
            } else {
                return 'Thua nửa';
            }
        }
        if ($this->bet_status == self::BET_STATUS_DRAW) {
            return 'Hòa';
        }

        if($this->bet_status == self::STATUS_UNUSUAL_BETS) {
            return 'Cược bất thường';
        }
        
        return 'Hoàn Phí';
    }

    public function isGroup() {
        return $this->bet_kind == self::KIND_GROUP;
    }

    public function getBetOdd() {
        if (in_array($this->bet_type, ['game_next_ou'])) {
            return 37.5;
        }
        if (!isset($this->odd['handicap_value'])) {
            return;
        }
        $odd = $this->odd['handicap_value'];
        if (in_array($this->bet_type, ['ft_ou', 'hf_ou'])) {
            return $odd;
        }
        if (in_array($this->bet_type, ['hf_1x2', 'ft_1x2'])) {
            return '';
        }
        return ($this->odd['handicap_team'] == 'home' ? -1 : 1) * ($this->bet_position == 0 ? 1: -1) * $odd;
    }

    public function getBetValue() {
        return $this->odd_type === self::ODD_TYPE_MALAY ? $this->bet_value : OddsConverter::convertToDecimal($this->bet_value);        
    }

    public function getGameType() {
        if (stripos($this->bet_type, 'game_') !== false) {
            return 'Number Game';
        }
        return 'Bóng Đá';
    }

    public function getBetName() {

        if (in_array($this->bet_type, ['ft_ou', 'hf_ou'])) {
            if ($this->bet_position == 0) {
                return 'Tài';
            } else {
                return 'Xỉu';
            }
        }
        
        if (strrpos($this->bet_type, 'game_') == 0) {
            if ($this->bet_position >= 80 && $this->bet_position <= 154) {
                return $this->bet_position - 79;
            }
            switch ($this->bet_position) {
                case 30:
                    return 'Tài';
                case 31:
                    return 'Xỉu';
                case 33:
                    return 'Lẻ';
                case 34:
                    return 'Chẳn';
                case 43:
                    return 'Tài 37.5/Lẻ';
                case 45:
                    return 'Tài 37.5/Chẳn';
                case 44:
                    return 'Xỉu 37.5/Lẻ';
                case 46:
                    return 'Xỉu 37.5/Chẳn';

                case 74:
                    return '1, 6, 11, 16, 21, 26, 31, 36, 41, 46, 51, 56, 61, 66, 71';
                case 75:
                    return '2, 7, 12, 17, 22, 27, 32, 37, 42, 47, 52, 57, 62, 67, 72';
                case 76:
                    return '3, 8, 13, 18, 23, 28, 33, 38, 43, 48, 53, 58, 63, 68, 73';
                case 77:
                    return '4, 9, 14, 19, 24, 29, 34, 39, 44, 49, 54, 59, 64, 69, 74';
                case 78:
                    return '5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75';

                case 48:
                    return '1~5';
                case 49:
                    return '6~10';
                case 50:
                    return '11~15';
                case 51:
                    return '16~20';
                case 52:
                    return '21~25';
                case 53:
                    return '26~30';
                case 54:
                    return '31~35';
                case 55:
                    return '36~40';
                case 56:
                    return '41~45';
                case 57:
                    return '46~50';
                case 58:
                    return '51~55';
                case 59:
                    return '56~60';
                case 60:
                    return '61~65';
                case 61:
                    return '66~70';
                case 62:
                    return '71~75';

                case 64:
                    return '1~15';
                case 65:
                    return '16~30';
                case 66:
                    return '31~45';
                case 67:
                    return '45~60';
                case 68:
                    return '61~75';

                case 70:
                    return '1~25';
                case 71:
                    return '26~50';
                case 72:
                    return '51~75';
            }
        }

        if (in_array($this->bet_type, ['hf_1x2'])) {
            if ($this->bet_position == 0) {
                return 'HT.1';
            } else if ($this->bet_position == 1) {
                return 'HT.2';
            } else {
                return 'HT.X';
            }
        }
        if (in_array($this->bet_type, ['ft_1x2'])) {
            if ($this->bet_position == 0) {
                return 'FT.1';
            } else if ($this->bet_position == 1) {
                return 'FT.2';
            } else {
                return 'FT.X';
            }
        }
        return $this->event[$this->bet_position == 0 ? 'home' : 'away'];
    }

    public function getBetType() {
        switch ($this->bet_type) {
          case 'ft_ou':
            return 'Tài/Xỉu';
          case 'hf_ou':
            return '1H.Tài/Xỉu HT';
          case 'ft_hdp':
            return 'Cược chấp';
          case 'hf_hdp':
            return '1H.Cược chấp';
          case 'hf_1x2':
            return '1H.1x2';
          case 'ft_1x2':
            return 'FT.1x2';

          case 'game_next_ou':
            return 'Next Tài/Xỉu';
          case 'game_next_oe':
            return 'Next Chẳn/Lẻ';
          case 'game_next_combo':
            return 'Next Combo';
          case 'game_wheel':
            return 'Number Wheel';
          case 'correct_score':
            return 'Điểm số chính xác';
          default:
            return 'Cược chấp FT';
          break;
        }
    }

    public function getStatusName() {
        $array = [
            self::STATUS_PENDING => 'Đang đợi',
            self::STATUS_RUNING => 'Đang chạy',
            self::STATUS_CANCEL => 'Cược hủy',
            self::STATUS_DONE => 'Hoàn thành',
        ];
        return $array[$this->status];
    }

    public function event() {
        return $this->hasOne('App\Models\Event', 'event_id', 'event_id')->select('home', 'away', 'league_name');
    }

    public function betsJson() {
        if ($this->bet_kind == self::KIND_NORMAL) {
            return (object) array(
                'rate' => $this->bet_value,
                'bets' => []
            );
        }
        $bets = $this->bets;
        $result = [];
        $rate = 1;
        foreach ($bets as $value) {
             $item = $value->getJson();
            $rate *= $item->bet_value;
            $result[] = $item;
        }
        return (object) array(
            'rate' => round($rate, 2),
            'bets' => $result
        );
    }

    public function bets() {
        return $this->hasMany('App\Models\Bet', 'group_id', 'id');
    }

    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id')->select('online', 'username', 'first_name', 'last_name', 'id');
    }

    public function getAttibuteName($key) {
        return isset($this->names[$key]) ? $this->names[$key] : $key;
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
            'user_name' => $user->username,
            'extra' => $result
        ]);
    }

    public static function findByOwner($id, $owner) {
        if ($owner->user_type == User::TYPE_ADMIN) {
            return Bet::find($id);    
        }
        return Bet::where([
            'id' => $id,
            $owner->getBetKey() => $owner->id,
        ])->first();
    }
}
