<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterN extends \Tabler\Icon {
    public static function getName(): string {
        return 'letter-n';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 20v-16l10 16v-16" />
        SVG;
    }
}