<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCodeDots extends \Tabler\Icon {
    public static function getName(): string {
        return 'code-dots';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 12h.01" />   <path d="M12 12h.01" />   <path d="M9 12h.01" />   <path d="M6 19a2 2 0 0 1 -2 -2v-4l-1 -1l1 -1v-4a2 2 0 0 1 2 -2" />   <path d="M18 19a2 2 0 0 0 2 -2v-4l1 -1l-1 -1v-4a2 2 0 0 0 -2 -2" />
        SVG;
    }
}