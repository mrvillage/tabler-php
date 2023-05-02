<?php
require_once(__DIR__ . '/../Icon.php');

class IconGenderBigender extends Icon {
    public static function getName(): string {
        return 'gender-bigender';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 11m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M19 3l-5 5" />   <path d="M15 3h4v4" />   <path d="M11 16v6" />   <path d="M8 19h6" />
        SVG;
    }
}