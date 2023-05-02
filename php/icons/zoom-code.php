<?php
require_once(__DIR__ . '/../Icon.php');

class IconZoomCode extends Icon {
    public static function getName(): string {
        return 'zoom-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M21 21l-6 -6" />   <path d="M8 8l-2 2l2 2" />   <path d="M12 8l2 2l-2 2" />
        SVG;
    }
}