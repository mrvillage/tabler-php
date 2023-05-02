<?php
require_once(__DIR__ . '../Icon.php');

class IconPlusEqual extends Icon {
    public static function getName(): string {
        return 'plus-equal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 7h6" />   <path d="M7 4v6" />   <path d="M20 16h-6" />   <path d="M20 19h-6" />   <path d="M5 19l14 -14" />
        SVG;
    }
}