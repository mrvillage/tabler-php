<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDisc extends \Tabler\Icon {
    public static function getName(): string {
        return 'disc';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 12a5 5 0 0 1 5 -5" />   <path d="M12 17a5 5 0 0 0 5 -5" />
        SVG;
    }
}