<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBone extends \Tabler\Icon {
    public static function getName(): string {
        return 'bone';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 3a3 3 0 0 1 3 3a3 3 0 1 1 -2.12 5.122l-4.758 4.758a3 3 0 1 1 -5.117 2.297l0 -.177l-.176 0a3 3 0 1 1 2.298 -5.115l4.758 -4.758a3 3 0 0 1 2.12 -5.122z" />
        SVG;
    }
}