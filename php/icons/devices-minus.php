<?php
require_once(__DIR__ . '/../Icon.php');

class IconDevicesMinus extends Icon {
    public static function getName(): string {
        return 'devices-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 16.5v-7.5a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v6" />   <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h8" />   <path d="M16 19h6" />   <path d="M16 9h2" />
        SVG;
    }
}