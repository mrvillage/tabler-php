<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowsTransferUp extends Icon {
    public static function getName(): string {
        return 'arrows-transfer-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 21v-6" />   <path d="M20 6l-3 -3l-3 3" />   <path d="M17 3v18" />   <path d="M10 18l-3 3l-3 -3" />   <path d="M7 3v2" />   <path d="M7 9v2" />
        SVG;
    }
}