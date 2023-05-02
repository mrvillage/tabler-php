<?php
require_once('../Icon.php');

class IconSquareRoundedLetterA extends Icon {
    public static function getName(): string {
        return 'square-rounded-letter-a';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 16v-6a2 2 0 1 1 4 0v6" />   <path d="M10 13h4" />   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
        SVG;
    }
}