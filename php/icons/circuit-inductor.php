<?php
require_once(__DIR__ . '/../Icon.php');

class IconCircuitInductor extends Icon {
    public static function getName(): string {
        return 'circuit-inductor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 14h3v-2a2 2 0 1 1 4 0v2v-1.5a2.5 2.5 0 1 1 5 0v1.5v-1.5a2.5 2.5 0 1 1 5 0v1.5h3" />
        SVG;
    }
}