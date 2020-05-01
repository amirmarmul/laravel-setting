<?php

namespace Kcdev\Setting;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    protected $casts = [
        'value' => 'json',
    ];

    public static function set($key, $value = null)
    {
        return static::firstOrNew(['key' => $key])
            ->fill(['value' => $value])
            ->save();
    }

    public static function get($key, $default = null)
    {
        if ($setting = static::where('key', $key)->first()) {
            return $setting->value;
        }

        return $default;
    }

    public function exists($key)
    {
        return static::where('key', $key)->exists();
    }
}
