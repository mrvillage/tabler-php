<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconQrcode extends \Tabler\Icon {
    public static function getName(): string {
        return 'qrcode';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M7 17l0 .01" />   <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M7 7l0 .01" />   <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M17 7l0 .01" />   <path d="M14 14l3 0" />   <path d="M20 14l0 .01" />   <path d="M14 14l0 3" />   <path d="M14 20l3 0" />   <path d="M17 17l3 0" />   <path d="M20 17l0 3" />
        SVG;
    }
}