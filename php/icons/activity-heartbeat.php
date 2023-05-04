<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconActivityHeartbeat extends \Tabler\Icon {
    public static function getName(): string {
        return 'activity-heartbeat';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h4.5l1.5 -6l4 12l2 -9l1.5 3h4.5" />
        SVG;
    }
}