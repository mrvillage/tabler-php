<?php
require_once(__DIR__ . '/../Icon.php');

class IconCurrencyDirham extends Icon {
    public static function getName(): string {
        return 'currency-dirham';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.5 19h-3.5" />   <path d="M8.599 16.479a1.5 1.5 0 1 0 -1.099 2.521" />   <path d="M7 4v9" />   <path d="M15 13h1.888a1.5 1.5 0 0 0 1.296 -2.256l-2.184 -3.744" />   <path d="M11 13.01v-.01" />
        SVG;
    }
}