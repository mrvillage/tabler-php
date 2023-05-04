<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCarTurbine extends \Tabler\Icon {
    public static function getName(): string {
        return 'car-turbine';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 13m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M18.86 11c.088 .66 .14 1.512 .14 2a8 8 0 1 1 -8 -8h6" />   <path d="M11 9c2.489 .108 4.489 .108 6 0" />   <path d="M17 3m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M11 13l-3.5 -1.5" />   <path d="M11 13l2.5 3" />   <path d="M8.5 16l2.5 -3" />   <path d="M11 13l3.5 -1.5" />   <path d="M11 9v4" />
        SVG;
    }
}