<html>

<head></head>

<body>
    <form action="index.php" method="get">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" value="Search">
    </form>
    <table>
        <thead>
            <tr>
                <td>Title</td>
                <td>Author</td>
                <td>Description</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><a href="index.php?book=<?php echo $book['id']; ?>"><?php echo $book['title']; ?></a></td>
                    <td><?php echo $book['last_name'] . ' ' . $book['first_name']; ?></td>
                    <td><?php echo $book['description']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>