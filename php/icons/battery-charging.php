<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBatteryCharging extends Tabler\Icon {
    public static function getName(): string {
        return 'battery-charging';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 7h1a2 2 0 0 1 2 2v.5a.5 .5 0 0 0 .5 .5a.5 .5 0 0 1 .5 .5v3a.5 .5 0 0 1 -.5 .5a.5 .5 0 0 0 -.5 .5v.5a2 2 0 0 1 -2 2h-2" />   <path d="M8 7h-2a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h1" />   <path d="M12 8l-2 4h3l-2 4" />
        SVG;
    }
}