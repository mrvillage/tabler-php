<?php
require_once(__DIR__ . '../Icon.php');

class IconTableShortcut extends Icon {
    public static function getName(): string {
        return 'table-shortcut';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 13v-8a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8" />   <path d="M3 10h18" />   <path d="M10 3v11" />   <path d="M2 22l5 -5" />   <path d="M7 21.5v-4.5h-4.5" />
        SVG;
    }
}