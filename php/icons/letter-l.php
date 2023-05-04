<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterL extends Tabler\Icon {
    public static function getName(): string {
        return 'letter-l';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4v16h10" />
        SVG;
    }
}