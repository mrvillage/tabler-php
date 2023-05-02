<?php
require_once(__DIR__ . '../Icon.php');

class IconDownloadOff extends Icon {
    public static function getName(): string {
        return 'download-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 1.83 -1.19" />   <path d="M7 11l5 5l2 -2m2 -2l1 -1" />   <path d="M12 4v4m0 4v4" />   <path d="M3 3l18 18" />
        SVG;
    }
}