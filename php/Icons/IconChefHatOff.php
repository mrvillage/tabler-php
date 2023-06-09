<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChefHatOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'chef-hat-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8.72 4.712a4 4 0 0 1 7.19 1.439a4 4 0 0 1 2.09 7.723v.126m0 4v3h-12v-7.126a4 4 0 0 1 .081 -7.796" />   <path d="M6.161 17.009l10.839 -.009" />   <path d="M3 3l18 18" />
        SVG;
    }
}