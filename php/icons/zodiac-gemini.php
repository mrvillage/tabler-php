<?php
require_once(__DIR__ . '../Icon.php');

class IconZodiacGemini extends Icon {
    public static function getName(): string {
        return 'zodiac-gemini';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3a21 21 0 0 0 18 0" />   <path d="M3 21a21 21 0 0 1 18 0" />   <path d="M7 4.5l0 15" />   <path d="M17 4.5l0 15" />
        SVG;
    }
}