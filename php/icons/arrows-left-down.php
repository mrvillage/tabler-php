<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowsLeftDown extends Icon {
    public static function getName(): string {
        return 'arrows-left-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3l-4 4l4 4" />   <path d="M3 7h11a3 3 0 0 1 3 3v11" />   <path d="M13 17l4 4l4 -4" />
        SVG;
    }
}