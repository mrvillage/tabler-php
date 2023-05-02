<?php
require_once(__DIR__ . '/../Icon.php');

class IconClearAll extends Icon {
    public static function getName(): string {
        return 'clear-all';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 6h12" />   <path d="M6 12h12" />   <path d="M4 18h12" />
        SVG;
    }
}