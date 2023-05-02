<?php
require_once(__DIR__ . '/../Icon.php');

class IconLayersDifference extends Icon {
    public static function getName(): string {
        return 'layers-difference';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 16v2a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-8a2 2 0 0 1 2 -2h2v-2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-2" />   <path d="M10 8l-2 0l0 2" />   <path d="M8 14l0 2l2 0" />   <path d="M14 8l2 0l0 2" />   <path d="M16 14l0 2l-2 0" />
        SVG;
    }
}