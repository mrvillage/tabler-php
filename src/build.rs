use include_dir::include_dir;

const ICONS: include_dir::Dir = include_dir!("$CARGO_MANIFEST_DIR/svg");

fn main() {
    println!("cargo:rerun-if-changed=src/Icon.php");
    for i in ICONS.files() {
        println!("cargo:rerun-if-changed={}", i.path().display());
    }
}
