<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyForint extends Icon {
    public static function getName(): string {
        return 'currency-forint';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 4h-4a3 3 0 0 0 -3 3v12" />   <path d="M10 11h-6" />   <path d="M16 4v13a2 2 0 0 0 2 2h2" />   <path d="M19 9h-5" />
        SVG;
    }
}