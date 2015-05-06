<?php

namespace vitalik74\primer;

/**
 * Utils function and use traits
 *
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 */
trait UtilsTrait {
    /**
     * If isset `$type` return value of `$types[$type]`
     * @param $type
     * @param array $types
     * @param string $default
     * @return mixed
     */
    public static function getType($type, array $types, $default = '')
    {
        return $types[$type] ?: $types[$default];
    }

    /**
     * @param $type
     * @param $types
     * @param string $default
     * @return mixed
     */
    public static function getTypeFromArray($type, array $types, $default = '')
    {
        return in_array($type, array_keys($types)) ? $types[$type] : (!empty($types[$default]) ?: '');
    }
}