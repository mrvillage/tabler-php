<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconXboxX extends \Tabler\Icon {
    public static function getName(): string {
        return 'xbox-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />   <path d="M9 8l6 8" />   <path d="M15 8l-6 8" />
        SVG;
    }
}