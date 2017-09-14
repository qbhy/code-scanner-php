<?php

namespace Qbhy\CodeScanner;

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
        $data = shell_exec(CodeScanner::SCANNER_PATH . CodeScanner::OS_MAP[PHP_OS] . " -path=$path");
        return @json_decode($data, true);
    }
}