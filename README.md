# code-scanner
扫码器

## 功能特性
1. 支持二维码和条形码两种扫描

## 环境需求

1. 系统 `zbar` 扩展

### 如何安装 `zbar` ? 
1. mac : `brew install zbar`
2. linux : `apt install imagemagick libzbar-dev`
3. windows :  [传送门](https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&tn=baidu&wd=windows%20%E5%AE%89%E8%A3%85zbar&oq=windows%2520zbar%2520%25E5%25AE%2589%25E8%25A3%2585&rsv_pq=dd09af4e0003d2c5&rsv_t=3d54uTul6LHome6h3jaZVlnF1b0zsCpPHU0zbRf4bNtVzDA3IPnFZvxyTso&rqlang=cn&rsv_enter=1&inputT=1441&rsv_sug3=40&rsv_sug1=17&rsv_sug7=000&rsv_sug2=0&rsv_sug4=2066&rsv_sug=2)

## 安装
```bash
composer require 96qbhy/code-scanner
```

## 使用
```php
require 'vendor/autoload.php';

use Qbhy\CodeScanner\CodeScanner;

var_dump(CodeScanner::scan('./bar.png'));
```
> 目前只支持 mac 平台， windows 和 linux 等我编译好在添加。

[https://github.com/96qbhy/code-scanner-php](https://github.com/96qbhy/code-scanner-php)  
96qbhy@gmail.com