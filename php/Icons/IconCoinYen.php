<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCoinYen extends \Tabler\Icon {
    public static function getName(): string {
        return 'coin-yen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 12h6" />   <path d="M9 15h6" />   <path d="M9 8l3 4.5" />   <path d="M15 8l-3 4.5v4.5" />
        SVG;
    }
}