<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLayoutDashboard extends Icon {
    public static function getName(): string {
        return 'layout-dashboard';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4h6v8h-6z" />   <path d="M4 16h6v4h-6z" />   <path d="M14 12h6v8h-6z" />   <path d="M14 4h6v4h-6z" />
        SVG;
    }
}