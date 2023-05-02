<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceGamepad extends Icon {
    public static function getName(): string {
        return 'device-gamepad';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 6m0 2a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />   <path d="M6 12h4m-2 -2v4" />   <path d="M15 11l0 .01" />   <path d="M18 13l0 .01" />
        SVG;
    }
}