<?php
require_once('../Icon.php');

class IconZodiacPisces extends Icon {
    public static function getName(): string {
        return 'zodiac-pisces';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3a21 21 0 0 1 0 18" />   <path d="M19 3a21 21 0 0 0 0 18" />   <path d="M5 12l14 0" />
        SVG;
    }
}