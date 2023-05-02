<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowsUp extends Icon {
    public static function getName(): string {
        return 'arrows-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3l0 18" />   <path d="M4 6l3 -3l3 3" />   <path d="M20 6l-3 -3l-3 3" />   <path d="M7 3l0 18" />
        SVG;
    }
}