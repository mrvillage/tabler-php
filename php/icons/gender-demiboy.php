<?php
require_once(__DIR__ . '/../Icon.php');

class IconGenderDemiboy extends Icon {
    public static function getName(): string {
        return 'gender-demiboy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 14m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M19 5l-5.4 5.4" />   <path d="M19 5h-5" />
        SVG;
    }
}