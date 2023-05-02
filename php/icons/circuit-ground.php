<?php
require_once('../Icon.php');

class IconCircuitGround extends Icon {
    public static function getName(): string {
        return 'circuit-ground';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13v-8" />   <path d="M4 13h16" />   <path d="M7 16h10" />   <path d="M10 19h4" />
        SVG;
    }
}