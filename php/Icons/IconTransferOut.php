<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTransferOut extends \Tabler\Icon {
    public static function getName(): string {
        return 'transfer-out';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19v2h16v-14l-8 -4l-8 4v2" />   <path d="M13 14h-9" />   <path d="M7 11l-3 3l3 3" />
        SVG;
    }
}