<?php
require_once('../Icon.php');

class IconInfoTriangle extends Icon {
    public static function getName(): string {
        return 'info-triangle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10h.01" />   <path d="M11 13h1v4h1" />   <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
        SVG;
    }
}