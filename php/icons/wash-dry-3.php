<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWashDry3 extends Tabler\Icon {
    public static function getName(): string {
        return 'wash-dry-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M12 12m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />   <path d="M12 12h.01" />   <path d="M9 12h.01" />   <path d="M15 12h.01" />
        SVG;
    }
}