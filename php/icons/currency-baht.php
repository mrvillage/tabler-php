<?php
require_once(__DIR__ . '/../Icon.php');

class IconCurrencyBaht extends Icon {
    public static function getName(): string {
        return 'currency-baht';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 6h5a3 3 0 0 1 3 3v.143a2.857 2.857 0 0 1 -2.857 2.857h-5.143" />   <path d="M8 12h5a3 3 0 0 1 3 3v.143a2.857 2.857 0 0 1 -2.857 2.857h-5.143" />   <path d="M8 6v12" />   <path d="M11 4v2" />   <path d="M11 18v2" />
        SVG;
    }
}