<?php
// counter.php
$file = "counter/visit_count.txt"; // 文件路径

// 确保文件路径是绝对路径或相对于当前脚本的相对路径
// 如果你的网站根目录是 /var/www/html，确保路径正确指向 /var/www/html/counter/visit_count.txt

// 检查文件是否存在，如果不存在则创建并初始化为0
if (!file_exists($file)) {
    // 确保目录存在，如果不存在则创建目录
    if (!is_dir(dirname($file))) {
        mkdir(dirname($file), 0777, true);
    }
    // 创建文件并初始化为0
    file_put_contents($file, 0);
}

// 读取当前的访问次数
$currentVisits = file_get_contents($file);

// 增加访问次数
$newVisits = intval($currentVisits) + 1;

// 写回文件
file_put_contents($file, $newVisits);

// 返回更新后的访问次数
echo $newVisits;
?>
