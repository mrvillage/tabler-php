<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowForward extends Icon {
    public static function getName(): string {
        return 'arrow-forward';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 11l4 4l-4 4m4 -4h-11a4 4 0 0 1 0 -8h1" />
        SVG;
    }
}