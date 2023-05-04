<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareAsterisk extends Tabler\Icon {
    public static function getName(): string {
        return 'square-asterisk';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M12 8.5v7" />   <path d="M9 10l6 4" />   <path d="M9 14l6 -4" />
        SVG;
    }
}