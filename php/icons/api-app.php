<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconApiApp extends Icon {
    public static function getName(): string {
        return 'api-app';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 15h-6.5a2.5 2.5 0 1 1 0 -5h.5" />   <path d="M15 12v6.5a2.5 2.5 0 1 1 -5 0v-.5" />   <path d="M12 9h6.5a2.5 2.5 0 1 1 0 5h-.5" />   <path d="M9 12v-6.5a2.5 2.5 0 0 1 5 0v.5" />
        SVG;
    }
}