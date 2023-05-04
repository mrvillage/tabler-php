<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCooker extends \Tabler\Icon {
    public static function getName(): string {
        return 'cooker';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 7h.01" />   <path d="M15 7h.01" />   <path d="M9 7h.01" />   <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M9 15h6" />   <path d="M5 11h14" />
        SVG;
    }
}