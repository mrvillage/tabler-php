<?php
require_once(__DIR__ . '../Icon.php');

class IconNotes extends Icon {
    public static function getName(): string {
        return 'notes';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M9 7l6 0" />   <path d="M9 11l6 0" />   <path d="M9 15l4 0" />
        SVG;
    }
}