<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFoldUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'fold-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13v-8l-3 3m6 0l-3 -3" />   <path d="M9 17l1 0" />   <path d="M14 17l1 0" />   <path d="M19 17l1 0" />   <path d="M4 17l1 0" />
        SVG;
    }
}