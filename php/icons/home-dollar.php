<?php
require_once(__DIR__ . '/../Icon.php');

class IconHomeDollar extends Icon {
    public static function getName(): string {
        return 'home-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 10l-7 -7l-9 9h2v7a2 2 0 0 0 2 2h6" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.387 0 .748 .11 1.054 .3" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />
        SVG;
    }
}