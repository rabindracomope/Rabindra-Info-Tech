<?php
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$target_file = $target_dir . basename($_FILES["certificate"]["name"]);

if (move_uploaded_file($_FILES["certificate"]["tmp_name"], $target_file)) {
    echo "फाइल सफलतापूर्वक अपलोड भयो: " . htmlspecialchars(basename($_FILES["certificate"]["name"]));
} else {
    echo "दुर्भाग्यवश, फाइल अपलोड गर्न सकिएन।";
}
?>
