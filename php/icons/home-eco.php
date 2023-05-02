<?php
require_once('../Icon.php');

class IconHomeEco extends Icon {
    public static function getName(): string {
        return 'home-eco';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 11l-8 -8l-9 9h2v7a2 2 0 0 0 2 2h5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.325 0 .631 .077 .902 .215" />   <path d="M16 22s0 -2 3 -4" />   <path d="M19 21a3 3 0 0 1 0 -6h3v3a3 3 0 0 1 -3 3z" />
        SVG;
    }
}