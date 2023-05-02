<?php
require_once(__DIR__ . '../Icon.php');

class IconCloudDownload extends Icon {
    public static function getName(): string {
        return 'cloud-download';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />   <path d="M12 13l0 9" />   <path d="M9 19l3 3l3 -3" />
        SVG;
    }
}