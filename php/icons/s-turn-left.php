<?php
require_once(__DIR__ . '../Icon.php');

class IconSTurnLeft extends Icon {
    public static function getName(): string {
        return 's-turn-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 7a2 2 0 1 1 0 -4a2 2 0 0 1 0 4z" />   <path d="M17 5h-9.5a3.5 3.5 0 0 0 0 7h9a3.5 3.5 0 0 1 0 7h-13.5" />   <path d="M6 16l-3 3l3 3" />
        SVG;
    }
}