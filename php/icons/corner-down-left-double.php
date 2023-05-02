<?php
require_once('../Icon.php');

class IconCornerDownLeftDouble extends Icon {
    public static function getName(): string {
        return 'corner-down-left-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 5v6a3 3 0 0 1 -3 3h-7" />   <path d="M13 10l-4 4l4 4m-5 -8l-4 4l4 4" />
        SVG;
    }
}