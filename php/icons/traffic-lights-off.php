<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrafficLightsOff extends Icon {
    public static function getName(): string {
        return 'traffic-lights-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4c.912 -1.219 2.36 -2 4 -2a5 5 0 0 1 5 5v6m0 4a5 5 0 0 1 -10 0v-10" />   <path d="M12 8a1 1 0 1 0 -1 -1" />   <path d="M11.291 11.295a1 1 0 0 0 1.418 1.41" />   <path d="M12 17m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}