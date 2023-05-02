<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandWix extends Icon {
    public static function getName(): string {
        return 'brand-wix';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 9l1.5 6l1.379 -5.515a.64 .64 0 0 1 1.242 0l1.379 5.515l1.5 -6" />   <path d="M13 11.5v3.5" />   <path d="M16 9l5 6" />   <path d="M21 9l-5 6" />   <path d="M13 9h.01" />
        SVG;
    }
}