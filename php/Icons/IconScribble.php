<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScribble extends \Tabler\Icon {
    public static function getName(): string {
        return 'scribble';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 15c2 3 4 4 7 4s7 -3 7 -7s-3 -7 -6 -7s-5 1.5 -5 4s2 5 6 5s8.408 -2.453 10 -5" />
        SVG;
    }
}