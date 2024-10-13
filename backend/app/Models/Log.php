<?php

namespace App\Models;

class Log extends BaseModel {

    const TYPE_EVENT = 'update_event';
    const TYPE_BET = 'update_bet';
    const TYPE_DELETE_BET = 'delete_bet';
    const TYPE_DOUBLE_BET = 'double_bet';
    const TYPE_MOVED_BET = 'move_bet';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logs';

    protected $fillable = [
        'user_id',
        'related_id',
        'user_name',
        'description',
        'type',
        'extra'
    ];

    protected $casts = [
        'extra' => 'json'
    ];

    public function getTypeName() {
        switch ($this->type) {
            case self::TYPE_EVENT:
                return 'Cập nhật Trận đấu';
            case self::TYPE_BET:
                return 'Cập nhật cược';
            case self::TYPE_DELETE_BET:
                return 'Xóa cược';
            case self::TYPE_DOUBLE_BET:
                return 'Nhân bản';
            case self::TYPE_MOVED_BET:
                return 'Dời cược';
            default:
                return 'Không biêt';
                break;
      }
    }
}
