<?php
require_once(__DIR__ . '../Icon.php');

class IconCircuitPushbutton extends Icon {
    public static function getName(): string {
        return 'circuit-pushbutton';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 17h2" />   <path d="M20 17h2" />   <path d="M6 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 11h12" />   <path d="M12 11v-6" />
        SVG;
    }
}