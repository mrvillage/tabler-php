<?php
require_once('../Icon.php');

class IconCircuitSwitchOpen extends Icon {
    public static function getName(): string {
        return 'circuit-switch-open';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12h2" />   <path d="M20 12h2" />   <path d="M6 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7.5 10.5l7.5 -5.5" />
        SVG;
    }
}