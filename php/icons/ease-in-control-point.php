<?php
require_once('../Icon.php');

class IconEaseInControlPoint extends Icon {
    public static function getName(): string {
        return 'ease-in-control-point';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19c8 0 18 -16 18 -16" />   <path d="M17 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0z" />   <path d="M17 19h-2" />   <path d="M12 19h-2" />
        SVG;
    }
}