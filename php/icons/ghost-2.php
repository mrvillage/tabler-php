<?php
require_once(__DIR__ . '/../Icon.php');

class IconGhost2 extends Icon {
    public static function getName(): string {
        return 'ghost-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 9h.01" />   <path d="M14 9h.01" />   <path d="M12 3a7 7 0 0 1 7 7v1l1 0a2 2 0 1 1 0 4l-1 0v3l2 3h-10a6 6 0 0 1 -6 -5.775l0 -.226l-1 0a2 2 0 0 1 0 -4l1 0v-1a7 7 0 0 1 7 -7z" />   <path d="M11 14h2a1 1 0 0 0 -2 0z" />
        SVG;
    }
}