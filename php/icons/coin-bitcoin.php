<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCoinBitcoin extends Icon {
    public static function getName(): string {
        return 'coin-bitcoin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 8h4.09c1.055 0 1.91 .895 1.91 2s-.855 2 -1.91 2c1.055 0 1.91 .895 1.91 2s-.855 2 -1.91 2h-4.09" />   <path d="M10 12h4" />   <path d="M10 7v10v-9" />   <path d="M13 7v1" />   <path d="M13 16v1" />
        SVG;
    }
}