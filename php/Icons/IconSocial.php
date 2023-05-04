<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSocial extends \Tabler\Icon {
    public static function getName(): string {
        return 'social';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 7l0 4" />   <path d="M6.7 17.8l2.8 -2" />   <path d="M17.3 17.8l-2.8 -2" />
        SVG;
    }
}