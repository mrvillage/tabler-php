<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowBackUpDouble extends Icon {
    public static function getName(): string {
        return 'arrow-back-up-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 14l-4 -4l4 -4" />   <path d="M8 14l-4 -4l4 -4" />   <path d="M9 10h7a4 4 0 1 1 0 8h-1" />
        SVG;
    }
}