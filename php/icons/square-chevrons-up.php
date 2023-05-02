<?php
require_once('../Icon.php');

class IconSquareChevronsUp extends Icon {
    public static function getName(): string {
        return 'square-chevrons-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15l3 -3l3 3" />   <path d="M9 11l3 -3l3 3" />   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}