<?php
// Start the session
session_start();
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}

echo "Page views: ".$_SESSION['page_views'];
?>
