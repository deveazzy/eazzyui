/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  if (typeof tinymce !== "undefined") {
    tinymce.init({
      selector: "textarea#tinymce-editor",
      license_key: "gpl",

      plugins: "lists link image code table help wordcount autoresize",
      toolbar:
        "undo redo | blocks | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image | code",
      min_height: 600,
      menubar: true,
      content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
      statusbar: false,
      branding: false,
    });
  } else {
    console.error(
      "TinyMCE is not loaded. Make sure the script tag for tinymce.min.js is included in the PHP file."
    );
  }
});
