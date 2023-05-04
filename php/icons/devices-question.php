<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDevicesQuestion extends Tabler\Icon {
    public static function getName(): string {
        return 'devices-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 20h-1a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v2" />   <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />   <path d="M16 9h2" />
        SVG;
    }
}