<?php
require_once('../Icon.php');

class IconMagnet extends Icon {
    public static function getName(): string {
        return 'magnet';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 13v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a2 2 0 0 0 6 0v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a8 8 0 0 1 -16 0" />   <path d="M4 8l5 0" />   <path d="M15 8l4 0" />
        SVG;
    }
}