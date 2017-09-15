<?php

namespace Qbhy\CodeScanner;

use Exception;

class CodeScanner
{
    const SCANNER_PATH = __DIR__ . '/../bin/';

    const OS_MAP = [
        'Darwin' => 'mac_scanner',
        'Linux' => 'linux_scanner',
        'Windows' => 'windows_scanner.exe'
    ];

    public static function scan($path)
    {
        if (!self::isImage($path)) {
            return self::error('not found file');
        }
        $data = shell_exec(CodeScanner::SCANNER_PATH . CodeScanner::OS_MAP[PHP_OS] . " -path=$path");
        return @json_decode($data, true);
    }

    private static function error($msg)
    {
        return [
            'msg' => $msg,
            'type' => '',
            'text' => ''
        ];
    }


    public static function isImage($filename)
    {
        $types = '.gif|.jpeg|.png|.jpg'; //定义检查的图片类型
        if (is_file($filename)) {
            $info = getimagesize($filename);
            $ext = image_type_to_extension($info['2']);
            return stripos($types, $ext);
        } else {
            return false;
        }
    }

}