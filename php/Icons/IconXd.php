<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconXd extends \Tabler\Icon {
    public static function getName(): string {
        return 'xd';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 8l4 8" />   <path d="M6 16l4 -8" />   <path d="M14 8v8h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2z" />
        SVG;
    }
}