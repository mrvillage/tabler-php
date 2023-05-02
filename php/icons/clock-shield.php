<?php
require_once('../Icon.php');

class IconClockShield extends Icon {
    public static function getName(): string {
        return 'clock-shield';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 0 -8.98 9" />   <path d="M12 7v5l1 1" />   <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
        SVG;
    }
}