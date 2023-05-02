<?php
require_once('../Icon.php');

class IconGenderAndrogyne extends Icon {
    public static function getName(): string {
        return 'gender-androgyne';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 11l6 -6" />   <path d="M9 15m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M19 9v-4h-4" />   <path d="M16.5 10.5l-3 -3" />
        SVG;
    }
}