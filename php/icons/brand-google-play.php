<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandGooglePlay extends Icon {
    public static function getName(): string {
        return 'brand-google-play';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 3.71v16.58a.7 .7 0 0 0 1.05 .606l14.622 -8.42a.55 .55 0 0 0 0 -.953l-14.622 -8.419a.7 .7 0 0 0 -1.05 .607z" />   <path d="M15 9l-10.5 11.5" />   <path d="M4.5 3.5l10.5 11.5" />
        SVG;
    }
}