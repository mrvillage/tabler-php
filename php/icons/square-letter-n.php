<?php
require_once('../Icon.php');

class IconSquareLetterN extends Icon {
    public static function getName(): string {
        return 'square-letter-n';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M10 16v-8l4 8v-8" />
        SVG;
    }
}