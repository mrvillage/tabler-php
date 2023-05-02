<?php
require_once(__DIR__ . '../Icon.php');

class IconEqualNot extends Icon {
    public static function getName(): string {
        return 'equal-not';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 10h14" />   <path d="M5 14h14" />   <path d="M5 19l14 -14" />
        SVG;
    }
}