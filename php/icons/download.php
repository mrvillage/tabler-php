<?php
require_once(__DIR__ . '../Icon.php');

class IconDownload extends Icon {
    public static function getName(): string {
        return 'download';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />   <path d="M7 11l5 5l5 -5" />   <path d="M12 4l0 12" />
        SVG;
    }
}