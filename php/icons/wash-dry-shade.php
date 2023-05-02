<?php
require_once(__DIR__ . '../Icon.php');

class IconWashDryShade extends Icon {
    public static function getName(): string {
        return 'wash-dry-shade';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M3 11l8 -8" />   <path d="M3 17l14 -14" />
        SVG;
    }
}