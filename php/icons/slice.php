<?php
require_once(__DIR__ . '/../Icon.php');

class IconSlice extends Icon {
    public static function getName(): string {
        return 'slice';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4" />
        SVG;
    }
}