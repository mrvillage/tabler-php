<?php
require_once('../Icon.php');

class IconClockPause extends Icon {
    public static function getName(): string {
        return 'clock-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.942 13.018a9 9 0 1 0 -7.909 7.922" />   <path d="M12 7v5l2 2" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}