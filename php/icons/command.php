<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCommand extends \Tabler\Icon {
    public static function getName(): string {
        return 'command';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 9a2 2 0 1 1 2 -2v10a2 2 0 1 1 -2 -2h10a2 2 0 1 1 -2 2v-10a2 2 0 1 1 2 2h-10" />
        SVG;
    }
}