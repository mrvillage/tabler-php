<?php
require_once(__DIR__ . '../Icon.php');

class IconMouse extends Icon {
    public static function getName(): string {
        return 'mouse';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3m0 4a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-4a4 4 0 0 1 -4 -4z" />   <path d="M12 7l0 4" />
        SVG;
    }
}