<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64b14effb82c9ed3b0df390ec49a6fae
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tommarti\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tommarti\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
    );

    public static $classMap = array (
        'TheSeer\\Tokenizer\\Exception' => __DIR__ . '/..' . '/theseer/tokenizer/src/Exception.php',
        'TheSeer\\Tokenizer\\NamespaceUri' => __DIR__ . '/..' . '/theseer/tokenizer/src/NamespaceUri.php',
        'TheSeer\\Tokenizer\\NamespaceUriException' => __DIR__ . '/..' . '/theseer/tokenizer/src/NamespaceUriException.php',
        'TheSeer\\Tokenizer\\Token' => __DIR__ . '/..' . '/theseer/tokenizer/src/Token.php',
        'TheSeer\\Tokenizer\\TokenCollection' => __DIR__ . '/..' . '/theseer/tokenizer/src/TokenCollection.php',
        'TheSeer\\Tokenizer\\TokenCollectionException' => __DIR__ . '/..' . '/theseer/tokenizer/src/TokenCollectionException.php',
        'TheSeer\\Tokenizer\\Tokenizer' => __DIR__ . '/..' . '/theseer/tokenizer/src/Tokenizer.php',
        'TheSeer\\Tokenizer\\XMLSerializer' => __DIR__ . '/..' . '/theseer/tokenizer/src/XMLSerializer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64b14effb82c9ed3b0df390ec49a6fae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64b14effb82c9ed3b0df390ec49a6fae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64b14effb82c9ed3b0df390ec49a6fae::$classMap;

        }, null, ClassLoader::class);
    }
}
