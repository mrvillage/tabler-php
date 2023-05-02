<?php
require_once(__DIR__ . '../Icon.php');

class IconHomeRibbon extends Icon {
    public static function getName(): string {
        return 'home-ribbon';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 15h5v7l-2.5 -1.5l-2.5 1.5z" />   <path d="M20 11l-8 -8l-9 9h2v7a2 2 0 0 0 2 2h5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h1.5" />
        SVG;
    }
}