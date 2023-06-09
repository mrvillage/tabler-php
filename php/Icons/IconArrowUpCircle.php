<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowUpCircle extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-up-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 17v-14" />   <path d="M15 6l-3 -3l-3 3" />   <path d="M12 17a2 2 0 1 0 0 4a2 2 0 0 0 0 -4" />
        SVG;
    }
}