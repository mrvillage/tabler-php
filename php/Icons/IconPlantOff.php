<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlantOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'plant-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 17v2a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2v-4h8" />   <path d="M11.9 7.908a6 6 0 0 0 -4.79 -4.806m-4.11 -.102v2a6 6 0 0 0 6 6h2" />   <path d="M12.531 8.528a6 6 0 0 1 5.469 -3.528h3v1a6 6 0 0 1 -5.037 5.923" />   <path d="M12 15v-3" />   <path d="M3 3l18 18" />
        SVG;
    }
}