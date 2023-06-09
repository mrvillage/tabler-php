<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorld extends \Tabler\Icon {
    public static function getName(): string {
        return 'world';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />   <path d="M3.6 9h16.8" />   <path d="M3.6 15h16.8" />   <path d="M11.5 3a17 17 0 0 0 0 18" />   <path d="M12.5 3a17 17 0 0 1 0 18" />
        SVG;
    }
}