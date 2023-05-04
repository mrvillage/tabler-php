<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileCertificate extends Tabler\Icon {
    public static function getName(): string {
        return 'file-certificate';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />   <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
        SVG;
    }
}