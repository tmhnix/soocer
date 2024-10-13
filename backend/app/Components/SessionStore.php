<?php
namespace App\Components;

class SessionStore {
	public static function getVersion() {
		$version = session('daniel.version');
        return $version ? $version : 'v2';
	}

	public static function isFirstVersion() {
		return self::getVersion() == 'v1';
	}

	public static function setVersion($value) {
        return session(['daniel.version' => $value]);;
	}

	public static function changeVersion() {
        return session(['daniel.version' => self::isFirstVersion() ? 'v2' : 'v1']);;
	}

	public static function setLayout($value) {
		return session(['daniel.layout' => $value]);
	}

	public static function getLayout() {
		return session('daniel.layout');
	}
}