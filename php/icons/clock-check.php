<?php
require_once(__DIR__ . '/../Icon.php');

class IconClockCheck extends Icon {
    public static function getName(): string {
        return 'clock-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.942 13.021a9 9 0 1 0 -9.407 7.967" />   <path d="M12 7v5l3 3" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}