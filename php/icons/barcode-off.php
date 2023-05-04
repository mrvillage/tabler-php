<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBarcodeOff extends Icon {
    public static function getName(): string {
        return 'barcode-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 7v-1c0 -.552 .224 -1.052 .586 -1.414" />   <path d="M4 17v1a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v1" />   <path d="M16 20h2c.551 0 1.05 -.223 1.412 -.584" />   <path d="M5 11h1v2h-1z" />   <path d="M10 11v2" />   <path d="M15 11v.01" />   <path d="M19 11v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}