<?php
require_once(__DIR__ . '../Icon.php');

class IconCircuitCapacitor extends Icon {
    public static function getName(): string {
        return 'circuit-capacitor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 12h-8" />   <path d="M2 12h8" />   <path d="M10 7v10" />   <path d="M14 7v10" />
        SVG;
    }
}