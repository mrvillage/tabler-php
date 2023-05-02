<?php
require_once('../Icon.php');

class IconArrowsDoubleSeNw extends Icon {
    public static function getName(): string {
        return 'arrows-double-se-nw';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 10l11 11" />   <path d="M14 17v4h-4" />   <path d="M14 3h-4v4" />   <path d="M21 14l-11 -11" />
        SVG;
    }
}