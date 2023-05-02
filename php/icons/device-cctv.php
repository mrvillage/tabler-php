<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceCctv extends Icon {
    public static function getName(): string {
        return 'device-cctv';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />   <path d="M12 14m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M19 7v7a7 7 0 0 1 -14 0v-7" />   <path d="M12 14l.01 0" />
        SVG;
    }
}