<?php
require_once(__DIR__ . '../Icon.php');

class IconPhotoShield extends Icon {
    public static function getName(): string {
        return 'photo-shield';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 8h.01" />   <path d="M11.5 20h-4.5a3 3 0 0 1 -3 -3v-10a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v4" />   <path d="M4 15l4 -4c.928 -.893 2.072 -.893 3 0l1.5 1.5" />   <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
        SVG;
    }
}