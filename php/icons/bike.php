<?php
require_once(__DIR__ . '/../Icon.php');

class IconBike extends Icon {
    public static function getName(): string {
        return 'bike';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M19 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 19l0 -4l-3 -3l5 -4l2 3l3 0" />   <path d="M17 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}