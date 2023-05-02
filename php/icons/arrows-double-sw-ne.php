<?php
require_once('../Icon.php');

class IconArrowsDoubleSwNe extends Icon {
    public static function getName(): string {
        return 'arrows-double-sw-ne';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3l-11 11" />   <path d="M3 10v4h4" />   <path d="M17 10h4v4" />   <path d="M10 21l11 -11" />
        SVG;
    }
}