<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCoinRupee extends \Tabler\Icon {
    public static function getName(): string {
        return 'coin-rupee';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M15 8h-6h1a3 3 0 0 1 0 6h-1l3 3" />   <path d="M9 11h6" />
        SVG;
    }
}