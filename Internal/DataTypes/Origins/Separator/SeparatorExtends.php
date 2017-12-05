<?php namespace ZN\DataTypes\Separator;

class SeparatorExtends
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Key
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected static $key = "+-?||?-+" ;

    //--------------------------------------------------------------------------------------------------------
    // Separator
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected static $separator = "|?-++-?|";

    //--------------------------------------------------------------------------------------------------------
    // Protected Security
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    //
    //--------------------------------------------------------------------------------------------------------
    protected static function _security($data)
    {
        return str_replace([self::$key, self::$separator], '', $data);
    }
}