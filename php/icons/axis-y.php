<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAxisY extends Tabler\Icon {
    public static function getName(): string {
        return 'axis-y';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 20h-.01" />   <path d="M15 20h-.01" />   <path d="M19 20h-.01" />   <path d="M4 7l3 -3l3 3" />   <path d="M7 20v-16" />
        SVG;
    }
}