<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScan extends \Tabler\Icon {
    public static function getName(): string {
        return 'scan';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 7v-1a2 2 0 0 1 2 -2h2" />   <path d="M4 17v1a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v1" />   <path d="M16 20h2a2 2 0 0 0 2 -2v-1" />   <path d="M5 12l14 0" />
        SVG;
    }
}