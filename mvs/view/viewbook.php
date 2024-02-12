<html>

<head></head>

<body>
    <?php if ($book) { ?>
        <h2>Title: <?php echo $book['title']; ?></h2>
        <p>Author: <?php echo $book['last_name'] . ' ' . $book['first_name']; ?></p>
        <p>Country: <?php echo $book['country']; ?></p>
        <p>Year of Publication: <?php echo $book['year_of_publication']; ?></p>
        <p>Page count: <?php echo $book['page_count']; ?></p>
        <p>Description: <?php echo $book['description']; ?></p>
    <?php } else { ?>
        <p>Book not found!</p>
    <?php } ?>
</body>

</html>