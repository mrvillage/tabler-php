<?php
require_once(__DIR__ . '/../Icon.php');

class IconSquareNumber7 extends Icon {
    public static function getName(): string {
        return 'square-number-7';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M10 8h4l-2 8" />
        SVG;
    }
}