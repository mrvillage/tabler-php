<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadHorizontalExclamation extends Tabler\Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 20h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6" />   <path d="M9 17h6" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}