<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircuitGroundDigital extends Icon {
    public static function getName(): string {
        return 'circuit-ground-digital';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13v-10" />   <path d="M12 21l-6 -8h12z" />
        SVG;
    }
}