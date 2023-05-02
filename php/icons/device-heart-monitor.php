<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceHeartMonitor extends Icon {
    public static function getName(): string {
        return 'device-heart-monitor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M4 9h6l1 -2l2 4l1 -2h6" />   <path d="M4 14h16" />   <path d="M14 17v.01" />   <path d="M17 17v.01" />
        SVG;
    }
}