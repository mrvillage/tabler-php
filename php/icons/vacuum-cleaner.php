<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVacuumCleaner extends Tabler\Icon {
    public static function getName(): string {
        return 'vacuum-cleaner';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 1 -18 0a9 9 0 0 1 18 0z" />   <path d="M14 9a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z" />   <path d="M12 16h.01" />
        SVG;
    }
}