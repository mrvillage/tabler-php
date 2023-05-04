<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconApiAppOff extends Icon {
    public static function getName(): string {
        return 'api-app-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 15h-6.5a2.5 2.5 0 1 1 0 -5h.5" />   <path d="M15 15v3.5a2.5 2.5 0 1 1 -5 0v-.5" />   <path d="M13 9h5.5a2.5 2.5 0 1 1 0 5h-.5" />   <path d="M9 12v-3m.042 -3.957a2.5 2.5 0 0 1 4.958 .457v.5" />   <path d="M3 3l18 18" />
        SVG;
    }
}