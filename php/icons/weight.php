<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWeight extends Icon {
    public static function getName(): string {
        return 'weight';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M6.835 9h10.33a1 1 0 0 1 .984 .821l1.637 9a1 1 0 0 1 -.984 1.179h-13.604a1 1 0 0 1 -.984 -1.179l1.637 -9a1 1 0 0 1 .984 -.821z" />
        SVG;
    }
}