<?php
require_once(__DIR__ . '../Icon.php');

class IconCircuitSwitchClosed extends Icon {
    public static function getName(): string {
        return 'circuit-switch-closed';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12h2" />   <path d="M20 12h2" />   <path d="M6 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 12h8" />
        SVG;
    }
}