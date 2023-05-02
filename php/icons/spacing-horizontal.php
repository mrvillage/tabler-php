<?php
require_once(__DIR__ . '/../Icon.php');

class IconSpacingHorizontal extends Icon {
    public static function getName(): string {
        return 'spacing-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 20h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h2" />   <path d="M4 20h2a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />   <path d="M12 8v8" />
        SVG;
    }
}