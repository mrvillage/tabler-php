<?php
require_once(__DIR__ . '../Icon.php');

class IconSquareF9 extends Icon {
    public static function getName(): string {
        return 'square-f9';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M13 14.25c0 .414 .336 .75 .75 .75h1.5a.75 .75 0 0 0 .75 -.75v-4.5a.75 .75 0 0 0 -.75 -.75h-1.5a.75 .75 0 0 0 -.75 .75v1.5c0 .414 .336 .75 .75 .75h2.25" />   <path d="M8 12h2" />   <path d="M10 9h-2v6" />
        SVG;
    }
}