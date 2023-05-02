<?php
require_once(__DIR__ . '/../Icon.php');

class IconIdBadge extends Icon {
    public static function getName(): string {
        return 'id-badge';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 3a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z" />   <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M10 6h4" />   <path d="M9 18h6" />
        SVG;
    }
}