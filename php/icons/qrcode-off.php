<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconQrcodeOff extends Tabler\Icon {
    public static function getName(): string {
        return 'qrcode-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h1a1 1 0 0 1 1 1v1m-.297 3.711a1 1 0 0 1 -.703 .289h-4a1 1 0 0 1 -1 -1v-4c0 -.275 .11 -.524 .29 -.705" />   <path d="M7 17v.01" />   <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M7 7v.01" />   <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M17 7v.01" />   <path d="M20 14v.01" />   <path d="M14 14v3" />   <path d="M14 20h3" />   <path d="M3 3l18 18" />
        SVG;
    }
}