<?php
include 'db.php';
// This logic saves the data when you click the button
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $source = $_POST['source_name'];
    $img = $_POST['image_url'];
    $url = $_POST['article_url'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO news_articles (title, source_name, image_url, article_url, description) 
            VALUES ('$title', '$source', '$img', '$url', '$desc')";
    $conn->query($sql);
    echo "News block added!";
}
?>

<form method="POST" style="background:#eee; padding:20px; border-radius:10px;">
    <h3>Add News to Website</h3>
    <input type="text" name="source_name" placeholder="Source (e.g. ANI News)" required><br><br>
    <input type="text" name="title" placeholder="News Headline" required><br><br>
    <input type="text" name="image_url" placeholder="Image Link (https://...)" required><br><br>
    <input type="text" name="article_url" placeholder="Article Link (https://...)" required><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <button type="submit" name="submit">Post to Site</button>
</form>