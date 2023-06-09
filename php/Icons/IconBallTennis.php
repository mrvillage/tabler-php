<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBallTennis extends \Tabler\Icon {
    public static function getName(): string {
        return 'ball-tennis';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M6 5.3a9 9 0 0 1 0 13.4" />   <path d="M18 5.3a9 9 0 0 0 0 13.4" />
        SVG;
    }
}