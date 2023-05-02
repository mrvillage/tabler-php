<?php
require_once('../Icon.php');

class IconSquareLetterF extends Icon {
    public static function getName(): string {
        return 'square-letter-f';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M10 12h3" />   <path d="M14 8h-4v8" />
        SVG;
    }
}