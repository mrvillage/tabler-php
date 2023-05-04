<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowUpLeftCircle extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-up-left-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.536 15.536l-9.536 -9.536" />   <path d="M10 6h-4v4" />   <path d="M15.586 15.586a2 2 0 1 0 2.828 2.828a2 2 0 0 0 -2.828 -2.828" />
        SVG;
    }
}