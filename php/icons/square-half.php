<?php
require_once(__DIR__ . '../Icon.php');

class IconSquareHalf extends Icon {
    public static function getName(): string {
        return 'square-half';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4v16" />   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M12 13l7.5 -7.5" />   <path d="M12 18l8 -8" />   <path d="M15 20l5 -5" />   <path d="M12 8l4 -4" />
        SVG;
    }
}