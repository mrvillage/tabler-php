<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrentLocationOff extends Tabler\Icon {
    public static function getName(): string {
        return 'current-location-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.685 10.661c-.3 -.6 -.795 -1.086 -1.402 -1.374m-3.397 .584a3 3 0 1 0 4.24 4.245" />   <path d="M6.357 6.33a8 8 0 1 0 11.301 11.326m1.642 -2.378a8 8 0 0 0 -10.597 -10.569" />   <path d="M12 2v2" />   <path d="M12 20v2" />   <path d="M20 12h2" />   <path d="M2 12h2" />   <path d="M3 3l18 18" />
        SVG;
    }
}