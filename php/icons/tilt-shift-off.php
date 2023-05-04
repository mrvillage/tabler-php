<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTiltShiftOff extends Icon {
    public static function getName(): string {
        return 'tilt-shift-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.56 3.69a9 9 0 0 0 -.577 .263" />   <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />   <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />   <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />   <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />   <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />   <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />   <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" />   <path d="M10.57 10.602a2 2 0 0 0 2.862 2.795" />   <path d="M3 3l18 18" />
        SVG;
    }
}