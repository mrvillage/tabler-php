<?php
require_once(__DIR__ . '../Icon.php');

class IconGitCommit extends Icon {
    public static function getName(): string {
        return 'git-commit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 3l0 6" />   <path d="M12 15l0 6" />
        SVG;
    }
}