<?php 

$price = 1200; 

if ($price >= 1000) {
    $discountedPrice = $price - ($price * 0.10);
    echo "আপনার ১০% ডিসকাউন্ট প্রযোজ্য হয়েছে। নতুন দাম: " . $discountedPrice . " টাকা";
} elseif ($price >= 500) {
    $discountedPrice = $price - ($price * 0.05);
    echo "আপনার ৫% ডিসকাউন্ট প্রযোজ্য হয়েছে। নতুন দাম: " . $discountedPrice . " টাকা";
} else {
    echo "কোনো ডিসকাউন্ট প্রযোজ্য নয়। পণ্যের আসল দাম: " . $price . " টাকা";
}
