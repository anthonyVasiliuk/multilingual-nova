<?php

namespace Anthonyvasiliuk\MultilingualNova\Helper;

class MultilingualHelper
{
    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed|string[]
     */
    public static function getSupportLocales()
    {
        if (config('multilingual.source') == 'array') {
            return config('multilingual.locales');
        }

        if (config('multilingual.source') == 'database') {
            $model = config('multilingual.database.model');
            $code = config('multilingual.database.code_field');
            $label = config('multilingual.database.label_field');

            $locales = ($model)::all()->mapWithKeys(function ($item) use ($code, $label) {
                return [$item->{$code} => $item->{$label}];
            });

            return $locales->toArray();
        }

        return ['en' => 'EN'];
    }
}
