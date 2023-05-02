<?php
require_once('../Icon.php');

class IconFridge extends Icon {
    public static function getName(): string {
        return 'fridge';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M5 10h14" />   <path d="M9 13v3" />   <path d="M9 6v1" />
        SVG;
    }
}