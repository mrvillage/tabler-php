<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWashDryOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'wash-dry-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.116 20.127a2.99 2.99 0 0 1 -2.116 .873h-12a3 3 0 0 1 -3 -3v-12c0 -.827 .335 -1.576 .877 -2.12m3.123 -.88h11a3 3 0 0 1 3 3v11" />   <path d="M3 3l18 18" />
        SVG;
    }
}