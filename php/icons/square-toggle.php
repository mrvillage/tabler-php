<?php
require_once('../Icon.php');

class IconSquareToggle extends Icon {
    public static function getName(): string {
        return 'square-toggle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 2l0 20" />   <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8" />   <path d="M20 6a2 2 0 0 0 -2 -2" />   <path d="M18 20a2 2 0 0 0 2 -2" />   <path d="M20 10l0 4" />
        SVG;
    }
}