<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyDogecoin extends Icon {
    public static function getName(): string {
        return 'currency-dogecoin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 12h6" />   <path d="M9 6v12" />   <path d="M6 18h6a6 6 0 1 0 0 -12h-6" />
        SVG;
    }
}