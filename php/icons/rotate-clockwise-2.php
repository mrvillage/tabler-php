<?php
require_once('../Icon.php');

class IconRotateClockwise2 extends Icon {
    public static function getName(): string {
        return 'rotate-clockwise-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 4.55a8 8 0 0 1 6 14.9m0 -4.45v5h5" />   <path d="M5.63 7.16l0 .01" />   <path d="M4.06 11l0 .01" />   <path d="M4.63 15.1l0 .01" />   <path d="M7.16 18.37l0 .01" />   <path d="M11 19.94l0 .01" />
        SVG;
    }
}