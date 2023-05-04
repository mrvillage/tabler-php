<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSkateboardOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'skateboard-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M15 15a2 2 0 0 0 2 2m2 -2a2 2 0 0 0 -2 -2" />   <path d="M3 9c0 .552 .895 1 2 1h5m4 0h5c1.105 0 2 -.448 2 -1" />   <path d="M3 3l18 18" />
        SVG;
    }
}