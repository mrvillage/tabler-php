<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDotsDiagonal extends Icon {
    public static function getName(): string {
        return 'dots-diagonal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 17m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M17 7m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}