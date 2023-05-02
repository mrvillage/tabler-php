<?php
require_once('../Icon.php');

class IconSTurnRight extends Icon {
    public static function getName(): string {
        return 's-turn-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 5h9.5a3.5 3.5 0 0 1 0 7h-9a3.5 3.5 0 0 0 0 7h13.5" />   <path d="M18 16l3 3l-3 3" />
        SVG;
    }
}