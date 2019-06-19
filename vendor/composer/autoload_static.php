<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42fcd6834b405ca076b66d6426293d5b
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\composer\\' => 13,
            'yii\\' => 4,
        ),
        'd' => 
        array (
            'dzer\\express\\' => 13,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'X' => 
        array (
            'Xu42\\KuaiDi100\\' => 15,
        ),
        'W' => 
        array (
            'Wythe\\Logistics\\' => 16,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'O' => 
        array (
            'OSS\\' => 4,
        ),
        'L' => 
        array (
            'Liaosp\\Express\\' => 15,
        ),
        'I' => 
        array (
            'Itxiao6\\Upload\\' => 15,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'dzer\\express\\' => 
        array (
            0 => __DIR__ . '/..' . '/dzer/yii2-express/src',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'Xu42\\KuaiDi100\\' => 
        array (
            0 => __DIR__ . '/..' . '/xu42/kuaidi100/src',
        ),
        'Wythe\\Logistics\\' => 
        array (
            0 => __DIR__ . '/..' . '/wythe/logistics/src',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'OSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS',
        ),
        'Liaosp\\Express\\' => 
        array (
            0 => __DIR__ . '/..' . '/liaosp/express/src',
        ),
        'Itxiao6\\Upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/itxiao6/upload/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'G' => 
        array (
            'GuzzleTool\\' => 
            array (
                0 => __DIR__ . '/..' . '/liaosp/guzzle-tool/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42fcd6834b405ca076b66d6426293d5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42fcd6834b405ca076b66d6426293d5b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit42fcd6834b405ca076b66d6426293d5b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
