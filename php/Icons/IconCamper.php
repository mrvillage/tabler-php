<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCamper extends \Tabler\Icon {
    public static function getName(): string {
        return 'camper';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M15 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M5 18h-1a1 1 0 0 1 -1 -1v-11a2 2 0 0 1 2 -2h12a4 4 0 0 1 4 4h-18" />   <path d="M9 18h6" />   <path d="M19 18h1a1 1 0 0 0 1 -1v-4l-3 -5" />   <path d="M21 13h-7" />   <path d="M14 8v10" />
        SVG;
    }
}