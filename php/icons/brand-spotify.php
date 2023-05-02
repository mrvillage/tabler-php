<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandSpotify extends Icon {
    public static function getName(): string {
        return 'brand-spotify';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M8 11.973c2.5 -1.473 5.5 -.973 7.5 .527" />   <path d="M9 15c1.5 -1 4 -1 5 .5" />   <path d="M7 9c2 -1 6 -2 10 .5" />
        SVG;
    }
}