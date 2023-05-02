<?php
require_once(__DIR__ . '/../Icon.php');

class IconPlugX extends Icon {
    public static function getName(): string {
        return 'plug-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.55 17.733a5.806 5.806 0 0 1 -7.356 -4.052a5.81 5.81 0 0 1 1.537 -5.627l2.054 -2.054l7.165 7.165" />   <path d="M4 20l3.5 -3.5" />   <path d="M15 4l-3.5 3.5" />   <path d="M20 9l-3.5 3.5" />   <path d="M16 16l4 4" />   <path d="M20 16l-4 4" />
        SVG;
    }
}