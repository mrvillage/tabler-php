<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconManualGearbox extends Icon {
    public static function getName(): string {
        return 'manual-gearbox';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 8l0 8" />   <path d="M12 8l0 8" />   <path d="M19 8v2a2 2 0 0 1 -2 2h-12" />
        SVG;
    }
}