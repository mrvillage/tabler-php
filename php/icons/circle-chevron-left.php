<?php
require_once('../Icon.php');

class IconCircleChevronLeft extends Icon {
    public static function getName(): string {
        return 'circle-chevron-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 15l-3 -3l3 -3" />   <path d="M21 12a9 9 0 1 0 -18 0a9 9 0 0 0 18 0z" />
        SVG;
    }
}