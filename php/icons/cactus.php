<?php
require_once('../Icon.php');

class IconCactus extends Icon {
    public static function getName(): string {
        return 'cactus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 9v1a3 3 0 0 0 3 3h1" />   <path d="M18 8v5a3 3 0 0 1 -3 3h-1" />   <path d="M10 21v-16a2 2 0 1 1 4 0v16" />   <path d="M7 21h10" />
        SVG;
    }
}