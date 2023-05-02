<?php
require_once('../Icon.php');

class IconGripHorizontal extends Icon {
    public static function getName(): string {
        return 'grip-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M5 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M19 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}