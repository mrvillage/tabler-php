<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceImacPin extends Icon {
    public static function getName(): string {
        return 'device-imac-pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 17h-8a1 1 0 0 1 -1 -1v-12a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v7.5" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />   <path d="M3 13h11" />   <path d="M8 21h4.5" />   <path d="M10 17l-.5 4" />
        SVG;
    }
}