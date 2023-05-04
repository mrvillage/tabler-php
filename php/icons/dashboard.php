<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDashboard extends Tabler\Icon {
    public static function getName(): string {
        return 'dashboard';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M13.45 11.55l2.05 -2.05" />   <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
        SVG;
    }
}