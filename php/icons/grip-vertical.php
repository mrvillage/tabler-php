<?php
require_once(__DIR__ . '/../Icon.php');

class IconGripVertical extends Icon {
    public static function getName(): string {
        return 'grip-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}