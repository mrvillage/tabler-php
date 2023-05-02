<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceMobileShare extends Icon {
    public static function getName(): string {
        return 'device-mobile-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21h-4a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />   <path d="M11 4h2" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />   <path d="M12 17v.01" />
        SVG;
    }
}