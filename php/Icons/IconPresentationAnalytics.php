<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPresentationAnalytics extends \Tabler\Icon {
    public static function getName(): string {
        return 'presentation-analytics';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 12v-4" />   <path d="M15 12v-2" />   <path d="M12 12v-1" />   <path d="M3 4h18" />   <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />   <path d="M12 16v4" />   <path d="M9 20h6" />
        SVG;
    }
}