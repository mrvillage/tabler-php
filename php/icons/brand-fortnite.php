<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandFortnite extends Icon {
    public static function getName(): string {
        return 'brand-fortnite';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 3h7.5l-.5 4h-3v3h3v3.5h-3v6.5l-4 1z" />
        SVG;
    }
}