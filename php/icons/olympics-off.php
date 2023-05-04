<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconOlympicsOff extends Tabler\Icon {
    public static function getName(): string {
        return 'olympics-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6a3 3 0 1 0 3 3" />   <path d="M18 9m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9 9a3 3 0 0 0 3 3m2.566 -1.445a3 3 0 0 0 -4.135 -4.113" />   <path d="M9 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12.878 12.88a3 3 0 0 0 4.239 4.247m.586 -3.431a3.012 3.012 0 0 0 -1.43 -1.414" />   <path d="M3 3l18 18" />
        SVG;
    }
}