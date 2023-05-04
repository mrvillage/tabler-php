<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyLari extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-lari';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 13a6 6 0 1 0 -6 6" />   <path d="M6 19h12" />   <path d="M10 5v7" />   <path d="M14 12v-7" />
        SVG;
    }
}