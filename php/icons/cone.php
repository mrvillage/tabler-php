<?php
require_once(__DIR__ . '/../Icon.php');

class IconCone extends Icon {
    public static function getName(): string {
        return 'cone';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 14c3.866 0 7 1.343 7 3s-3.134 3 -7 3s-7 -1.343 -7 -3s3.134 -3 7 -3z" />   <path d="M19 17v-.5l-7 -12.5l-7 12.5v.5" />
        SVG;
    }
}