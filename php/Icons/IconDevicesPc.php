<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDevicesPc extends \Tabler\Icon {
    public static function getName(): string {
        return 'devices-pc';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5h6v14h-6z" />   <path d="M12 9h10v7h-10z" />   <path d="M14 19h6" />   <path d="M17 16v3" />   <path d="M6 13v.01" />   <path d="M6 16v.01" />
        SVG;
    }
}