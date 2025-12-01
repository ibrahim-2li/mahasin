<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    protected $fillable = ['section', 'key', 'value'];

    public static function get($section, $key, $default = '')
    {
        $content = self::where('section', $section)
                      ->where('key', $key)
                      ->first();
        
        return $content ? $content->value : $default;
    }

    public static function set($section, $key, $value)
    {
        return self::updateOrCreate(
            ['section' => $section, 'key' => $key],
            ['value' => $value]
        );
    }
}
