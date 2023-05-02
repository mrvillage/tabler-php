<?php
require_once('../Icon.php');

class IconTransferIn extends Icon {
    public static function getName(): string {
        return 'transfer-in';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18v3h16v-14l-8 -4l-8 4v3" />   <path d="M4 14h9" />   <path d="M10 11l3 3l-3 3" />
        SVG;
    }
}