<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconElevatorOff extends Tabler\Icon {
    public static function getName(): string {
        return 'elevator-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h10a1 1 0 0 1 1 1v10m0 4a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1v-14" />   <path d="M12 8l2 2" />   <path d="M10 14l2 2l2 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}