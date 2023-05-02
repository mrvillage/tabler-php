<?php
require_once(__DIR__ . '/../Icon.php');

class IconEraser extends Icon {
    public static function getName(): string {
        return 'eraser';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3" />   <path d="M18 13.3l-6.3 -6.3" />
        SVG;
    }
}