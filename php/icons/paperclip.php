<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPaperclip extends Tabler\Icon {
    public static function getName(): string {
        return 'paperclip';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
        SVG;
    }
}