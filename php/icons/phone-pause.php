<?php
require_once('../Icon.php');

class IconPhonePause extends Icon {
    public static function getName(): string {
        return 'phone-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />   <path d="M20 3l0 4" />   <path d="M16 3l0 4" />
        SVG;
    }
}