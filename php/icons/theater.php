<?php
require_once(__DIR__ . '/../Icon.php');

class IconTheater extends Icon {
    public static function getName(): string {
        return 'theater';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20h16" />   <path d="M20 16v-10a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2v10l4 -6c2.667 1.333 5.333 1.333 8 0l4 6z" />
        SVG;
    }
}