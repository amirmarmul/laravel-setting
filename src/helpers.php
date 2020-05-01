<?php

function option($key = null, $default = null)
{
    if (is_null($key)) {
        return app('option');
    }

    if (is_array($key)) {
        return app('option')->set($key);
    }

    return app('option')->get($key, $default);
}
