<?php
require_once('../Icon.php');

class IconSquareRoundedLetterX extends Icon {
    public static function getName(): string {
        return 'square-rounded-letter-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 8l4 8" />   <path d="M10 16l4 -8" />   <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
        SVG;
    }
}