<?php
require_once(__DIR__ . '../Icon.php');

class IconSelector extends Icon {
    public static function getName(): string {
        return 'selector';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9l4 -4l4 4" />   <path d="M16 15l-4 4l-4 -4" />
        SVG;
    }
}