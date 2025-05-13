<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="pokemon_create_process.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="type">type</label>
        <input type="text" name="type" id="type" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="description">description</label>
        <input type="description" name="description" id="description" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="image">image</label>
        <input type="text" name="image" id="image" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="height">height</head></label>
        <input type="height" name="height" id="height" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="weight">weight</head></label>
        <input type="weight" name="weight" id="weight" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="abilities">abilities</head></label>
        <input type="abilities" name="abilities" id="abilities" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="evolution_stage">evolution_stage</head></label>
        <input type="evolution_stage" name="evolution_stage" id="evolution_stage" class="form-control" required>
    </div>
    
    <div class="form-group"">
    <label for="hp">hp</head></label>
        <input type="hp" name="hp" id="hp" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="attack">attack</head></label>
        <input type="attack" name="attack" id="attack" class="form-control" required>
    </div>

    <div class="form-group"">
    <label for="defense">defense</head></label>
        <input type="defense" name="defense" id="defense" class="form-control" required>
    </div>

    <button type="submit">Create</button>
    </form>
</body>

</html>
