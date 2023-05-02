<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandCodepen extends Icon {
    public static function getName(): string {
        return 'brand-codepen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 15l9 6l9 -6l-9 -6l-9 6" />   <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />   <path d="M3 9l0 6" />   <path d="M21 9l0 6" />   <path d="M12 3l0 6" />   <path d="M12 15l0 6" />
        SVG;
    }
}