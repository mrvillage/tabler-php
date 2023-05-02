<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircuitCell extends Icon {
    public static function getName(): string {
        return 'circuit-cell';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12h8" />   <path d="M14 12h8" />   <path d="M10 5v14" />   <path d="M14 9v6" />
        SVG;
    }
}