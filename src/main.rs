use include_dir::include_dir;

const ICONS: include_dir::Dir = include_dir!("$CARGO_MANIFEST_DIR/svg");
const ICONS_PHP: &str = include_str!("Icon.php");

fn main() {
    let out_dir = std::env::current_dir().unwrap().join("php/icons");
    std::fs::write(
        std::env::current_dir().unwrap().join("php/Icon.php"),
        ICONS_PHP,
    )
    .expect("Failed to write Icon.php");
    match std::fs::create_dir(&out_dir) {
        Ok(_) => {},
        Err(e) => {
            if e.kind() != std::io::ErrorKind::AlreadyExists {
                panic!("Failed to create output directory: {}", e);
            }
        },
    }
    let re = regex::Regex::new("(?sU)<svg.*>(.*)</svg>").unwrap();
    for i in ICONS.files() {
        let name = i
            .path()
            .file_name()
            .unwrap()
            .to_str()
            .unwrap()
            .replace(".svg", "");
        let class_name: String = name
            .split('-')
            .map(|i| {
                format!(
                    "{}{}",
                    i.chars().next().unwrap().to_ascii_uppercase(),
                    &i[1..]
                )
            })
            .collect();
        let cap = re
            .captures(
                i.contents_utf8()
                    .unwrap_or_else(|| panic!("Failed to read {}", i.path().display())),
            )
            .unwrap_or_else(|| panic!("Failed to parse {}", i.path().display()));
        let svg = cap
            .get(1)
            .unwrap_or_else(|| panic!("Could not get capture for {}", i.path().display()))
            .as_str()
            .trim()
            .replace('\n', " ");
        std::fs::write(
            out_dir.join(format!("{}.php", name)),
            format!(
                r#"<?php
require_once(__DIR__ . '/../Icon.php');

class Icon{class_name} extends Icon {{
    public static function getName(): string {{
        return '{name}';
    }}

    public static function getSvg(): string {{
        return <<<SVG
            {svg}
        SVG;
    }}
}}"#
            ),
        )
        .unwrap_or_else(|_| panic!("Failed to write {}", i.path().display()));
    }
}
