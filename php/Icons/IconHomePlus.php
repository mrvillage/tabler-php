<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHomePlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'home-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 12h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h5.5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2" />   <path d="M16 19h6" />   <path d="M19 16v6" />
        SVG;
    }
}