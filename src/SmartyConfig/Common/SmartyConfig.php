<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-anyuan-share-config/src/SmartyConfig/Ay',
            S_ROOT.'vendor/qixinyun/pingxiang-anyuan-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-anyuan-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
