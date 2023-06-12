<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .movie-icon {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Projekt - Luka Vidaković</a>
    </nav>

    <div class="container">
        <?php
        $data = file_get_contents('movies.json');
        $movies = json_decode($data);
        ?>

        <div class="row">
            <?php
            foreach ($movies as $movie) {
                echo '<div class="col-md-4 mb-3">';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $movie->title . '</h5>';
                echo '<p class="card-text"><strong>Director:</strong> ' . $movie->director . '</p>';
                echo '<p class="card-text"><strong>Year:</strong> ' . $movie->year . '</p>';
                echo '<p class="card-text"><strong>Genre:</strong> ' . $movie->genre . '</p>';
                echo '<img src="movie-icons/' . $movie->image . '" class="card-img-top movie-icon" alt="Movie Icon">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
