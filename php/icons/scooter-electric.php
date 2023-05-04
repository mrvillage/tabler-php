<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScooterElectric extends Icon {
    public static function getName(): string {
        return 'scooter-electric';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 17h5a6 6 0 0 1 5 -5v-5a2 2 0 0 0 -2 -2h-1" />   <path d="M10 4l-2 4h3l-2 4" />
        SVG;
    }
}