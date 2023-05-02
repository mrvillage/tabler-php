<?php
require_once(__DIR__ . '/../Icon.php');

class IconAirConditioning extends Icon {
    public static function getName(): string {
        return 'air-conditioning';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16a3 3 0 0 1 -3 3" />   <path d="M16 16a3 3 0 0 0 3 3" />   <path d="M12 16v4" />   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M7 13v-3a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v3" />
        SVG;
    }
}