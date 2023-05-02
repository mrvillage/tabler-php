<?php
require_once(__DIR__ . '../Icon.php');

class IconAlertTriangle extends Icon {
    public static function getName(): string {
        return 'alert-triangle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />   <path d="M12 9v4" />   <path d="M12 17h.01" />
        SVG;
    }
}