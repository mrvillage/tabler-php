<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowRotaryStraight extends Icon {
    public static function getName(): string {
        return 'arrow-rotary-straight';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 13m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M13 16v5" />   <path d="M13 3v7" />   <path d="M9 7l4 -4l4 4" />
        SVG;
    }
}