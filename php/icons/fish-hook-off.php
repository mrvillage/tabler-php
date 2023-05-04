<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFishHookOff extends Tabler\Icon {
    public static function getName(): string {
        return 'fish-hook-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 9v3m-.085 3.924a5 5 0 0 1 -9.915 -.924v-4l3 3" />   <path d="M16 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M16 5v-2" />   <path d="M3 3l18 18" />
        SVG;
    }
}