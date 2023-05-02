<?php
require_once(__DIR__ . '../Icon.php');

class IconSquareRoundedLetterM extends Icon {
    public static function getName(): string {
        return 'square-rounded-letter-m';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 16v-8l3 5l3 -5v8" />   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
        SVG;
    }
}