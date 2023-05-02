<?php
require_once(__DIR__ . '../Icon.php');

class IconShip extends Icon {
    public static function getName(): string {
        return 'ship';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" />   <path d="M4 18l-1 -5h18l-2 4" />   <path d="M5 13v-6h8l4 6" />   <path d="M7 7v-4h-1" />
        SVG;
    }
}