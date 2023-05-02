<?php
require_once('../Icon.php');

class IconTriangleSquareCircle extends Icon {
    public static function getName(): string {
        return 'triangle-square-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l-4 7h8z" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
        SVG;
    }
}