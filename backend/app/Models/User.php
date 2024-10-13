<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use DB;
use Laratrust\Traits\LaratrustUserTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;
use JWTAuth;
use JWTFactory;

class User extends Authenticatable implements JWTSubject
{
    use LaratrustUserTrait;
    use Notifiable;

    const TYPE_ADMIN = 'admin';
    const TYPE_SUPER = 'super';
    const TYPE_MASTER = 'master';
    const TYPE_AGENT = 'agent';
    const TYPE_MEMBER = 'member';
    const TYPE_SUB = 'sub';

    const GUARD_PORTAL = 'portal';
    const GUARD_WEB = 'web';

    const STATUS_ACTIVE = 'active';
    const STATUS_BLOCK = 'block';
    const STATUS_SUSPENDED = 'suspended';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'first_name',
        'last_name',
        'last_seen',
        'home_mobile',
        'phone',
        'fax',
        'group',
        'wallet',
        'credit_line',
        'discountAsian',
        'discount1x2',
        'discountCS',
        'discountNumber',
        'discountHRFixOdds',
        'bongdamin',
        'bongdamax',
        'bongdaper',
        'bongromin',
        'bongromax',
        'bongroper',
        'bauducmin',
        'bauducmax',
        'bauducper'
    ];

    protected $casts = [
        'discountAsian' => 'double',
        'wallet' => 'double',
        'runing_amount' => 'double',
        'stake' => 'double',
        'profit' => 'double',
        'bongdamin' => 'double',
        'bongdamax' => 'double',
        'credit_line' => 'double'
    ];

    public function generateJwt() {
        return JWTAuth::fromUser($this);
    }

    public function attachPermissionByName($name) {
        $permission = Permission::where('name', $name)->first();
        if (!$this->can($name)) $this->attachPermission($permission);
    }

    public function detachPermissionByName($name) {
        $permission = Permission::where('name', $name)->first();
        $this->detachPermission($permission);
    }

    public function canViewOnline() {
        $value = env('PERMISSION_ONLINE');
        if ($value) {
            $permissions = explode(',', env('PERMISSION_ONLINE'));
            $hasOnlinePermission = in_array($this->user_type, $permissions);
        } else {
            $hasOnlinePermission = true;
        }

        return $hasOnlinePermission;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function hashPassword($password) {
        return password_hash($password, 1);
    }

    /**
     * add new password hash
     *
     * @param String $password
     */
    public function setPassword($password) {
        $this->password = static::hashPassword($password);
    }

    public function validPwd($pwd) {
        return password_verify($pwd, $this->password);
    }

    public function loginCode($code) {
        if ($code == $this->secure_code) {
            session(['secure_code' => $code]);
            return true;
        }
        return false;
    }

    public static function logoutCode() {
        session(['secure_code' => null]);
    }

    public function hasLoginCode() {
        return session()->has('secure_code');
    }

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "$this->first_name $this->last_name";
    }

    public function getStatusName() {
        $array = [
            'active' => 'Mở',
            'block' => 'Bị Khóa',
            'suspended' => 'Bị đình chỉ'
        ];
        return $array[$this->status];
    }

    public static function getAdmin() {
        return Auth::guard(self::GUARD_PORTAL)->user();
    }

    public static function getUser() {
        return Auth::guard(self::GUARD_WEB)->user();
    }

    public function childIds() {
        if ($this->user_type == self::TYPE_MEMBER) {
            return [];
        }
        return self::getMemberIds($this->user_type, [$this->id]);
    }

    public function isAdmin() {
        return $this->user_type === self::TYPE_ADMIN;
    }

    public function isSub() {
        return $this->user_type === self::TYPE_SUB;
    }

    public function inStatus($statusList) {
        $ids = $this->getParentIds();
        $ids[] = $this->id;
        if ($this->id === 0) {
            $ids[] = 1;
        }
        return self::whereNotIn('status', $statusList)->whereIn('id', $ids)->count() === 0;
    }

    public function addAttachedParents($parent) {
        $list = explode('-', $parent->parents);
        if (!in_array((string)$parent->id, $list)) {
            $list[] = (string)$parent->id;
        }
        $result = $list[0];
        for ($i=1; $i < sizeof($list); $i++) {
            $result .= '-'.$list[$i];
        }
        $this->parents = $result;
    }

    public function isOwner($id) {
        $ids = $this->getParentIds();
        $ids[] = $this->id;
        if ($this->id === 0) {
            $ids[] = 1;
        }
        return in_array($id, $ids);
    }

    public function getOwnerParent() {
        if ($this->isSub()) {
            return $this->parent;
        }
        return $this;
    }

    public function parent() {
        return $this->hasOne('App\Models\User', 'id', 'parent_id');
    }

    public function getParentIds() {
        return explode('-', $this->parents);
    }

    public static function getChildType($type) {
        $array = [self::TYPE_ADMIN, self::TYPE_SUPER, self::TYPE_MASTER, self::TYPE_AGENT, self::TYPE_MEMBER];
        $key = array_search($type, $array);
        return $array[$key + 1];
    }

    public function getNextType() {
        return $this->getChildType($this->user_type);
    }

    public function getBetKey() {
        $current_type = $this->user_type;
        if ($current_type == self::TYPE_MEMBER) {
            $key = 'user_id';
        } else {
            $key = $current_type.'_id';
        }
        return $key;
    }

    public function getNextChildIds() {
        return self::where('parent_id', $this->id)->select('id')->pluck('id')->toArray();
    }

    private static function getMemberIds($type, $ids) {
        $next = self::getChildType($type);
        $newIds = self::whereIn('parent_id', $ids)->where('user_type', $next)->select('id')->pluck('id')->toArray();
        if ($next == self::TYPE_MEMBER) {
            return $newIds;
        }
        return self::getMemberIds(self::getChildType($type), $newIds);
    }

    public function includeProfit() {
        $betsDone = Bet::where('user_id', $this->id)
        ->whereIn('bet_kind', [Bet::KIND_GROUP, Bet::KIND_NORMAL])
        ->where('status', Bet::STATUS_DONE)
        ->whereDate('created_at', date("Y-m-d"))
        ->selectRaw('sum(bet_profit + bet_commission) as profit')
        ->groupBy('user_id')
        ->first();

        $this->profit = isset($betsDone->profit) ? $betsDone->profit : 0;
        return $this->profit;
    }

    public function includeRuningAmount() {
        $betsRuning = Bet::where('user_id', $this->id)
        ->whereIn('bet_kind', [Bet::KIND_GROUP, Bet::KIND_NORMAL])
        ->where('status', Bet::STATUS_RUNING)
        ->selectRaw('sum(bet_amount) as amount')
        ->groupBy('user_id')
        ->first();
        $this->runing_amount = isset($betsRuning->amount) ? $betsRuning->amount : 0;
        return $this->runing_amount;
    }

    public function includeRuningAmountToday() {
        $betsRuning = Bet::where('user_id', $this->id)
        ->whereIn('bet_kind', [Bet::KIND_GROUP, Bet::KIND_NORMAL])
        ->where('status', Bet::STATUS_RUNING)
        ->whereDate('created_at', date("Y-m-d"))
        ->selectRaw('sum(bet_amount) as amount')
        ->groupBy('user_id')
        ->first();
        $this->runing_amount_today = isset($betsRuning->amount) ? $betsRuning->amount : 0;
        return $this->runing_amount_today;
    }

    public function includeRuningAmountNotToday() {
        $betsRuning = Bet::where('user_id', $this->id)
        ->whereIn('bet_kind', [Bet::KIND_GROUP, Bet::KIND_NORMAL])
        ->where('status', Bet::STATUS_RUNING)
        ->whereDate('created_at', '<>', date("Y-m-d"))
        ->selectRaw('sum(bet_amount) as amount')
        ->groupBy('user_id')
        ->first();
        $this->runing_amount_not_today = isset($betsRuning->amount) ? $betsRuning->amount : 0;
        return $this->runing_amount_not_today;
    }

    public function includeStake() {
        $stake = Bet::where('user_id', $this->id)
        ->whereIn('bet_kind', [Bet::KIND_GROUP, Bet::KIND_NORMAL])
        ->where('status', Bet::STATUS_DONE)
        ->whereDate('created_at', date("Y-m-d"))
        ->selectRaw('sum(bet_amount) as amount')
        ->groupBy('user_id')
        ->first();

        $this->stake = isset($stake->amount) ? $stake->amount : 0;
        return $this->stake;
    }

    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }
}
