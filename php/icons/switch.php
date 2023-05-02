<?php
require_once(__DIR__ . '/../Icon.php');

class IconSwitch extends Icon {
    public static function getName(): string {
        return 'switch';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 4l4 0l0 4" />   <path d="M14.75 9.25l4.25 -5.25" />   <path d="M5 19l4 -4" />   <path d="M15 19l4 0l0 -4" />   <path d="M5 5l14 14" />
        SVG;
    }
}