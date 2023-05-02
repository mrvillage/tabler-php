<?php
require_once(__DIR__ . '/../Icon.php');

class IconLocationBroken extends Icon {
    public static function getName(): string {
        return 'location-broken';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.896 19.792l-2.896 -5.792l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5l-3.487 9.657" />   <path d="M21.5 21.5l-5 -5" />   <path d="M16.5 21.5l5 -5" />
        SVG;
    }
}