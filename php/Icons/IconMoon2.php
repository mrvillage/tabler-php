<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoon2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'moon-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16.418 4.157a8 8 0 0 0 0 15.686" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}