<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Commons;

/**
 * base user model
 */
class BaseModel extends Model {
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $wasNew = false;

    public function save(array $options = array()) {
        if (!$this->exists) {
            $this->wasNew = true;
        }

        parent::save($options);
    }
}
