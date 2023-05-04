<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconYoga extends \Tabler\Icon {
    public static function getName(): string {
        return 'yoga';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4 20h4l1.5 -3" />   <path d="M17 20l-1 -5h-5l1 -7" />   <path d="M4 10l4 -1l4 -1l4 1.5l4 1.5" />
        SVG;
    }
}