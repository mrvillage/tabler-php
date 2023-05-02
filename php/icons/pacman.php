<?php
require_once(__DIR__ . '/../Icon.php');

class IconPacman extends Icon {
    public static function getName(): string {
        return 'pacman';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.636 5.636a9 9 0 0 1 13.397 .747l-5.619 5.617l5.619 5.617a9 9 0 1 1 -13.397 -11.981z" />   <circle cx="11.5" cy="7.5" r="1" fill="currentColor" />
        SVG;
    }
}