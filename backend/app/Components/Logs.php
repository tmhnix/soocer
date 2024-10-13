<?php
namespace App\Components;
use Illuminate\Support\Facades\Log;

class Logs {
	public static function error($value) {
		return Log::Error($value);
	}
}