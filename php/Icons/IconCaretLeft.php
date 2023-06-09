<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCaretLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'caret-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 6l-6 6l6 6v-12" />
        SVG;
    }
}