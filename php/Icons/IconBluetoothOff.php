<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBluetoothOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'bluetooth-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3l18 18" />   <path d="M16.438 16.45l-4.438 3.55v-8m0 -4v-4l5 4l-2.776 2.22m-2.222 1.779l-5 4" />
        SVG;
    }
}