<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareF4 extends \Tabler\Icon {
    public static function getName(): string {
        return 'square-f4';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M13 9v2a1 1 0 0 0 1 1h1" />   <path d="M16 9v6" />   <path d="M8 12h2" />   <path d="M10 9h-2v6" />
        SVG;
    }
}