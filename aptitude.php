<!DOCTYPE html>
<head>
    <title>Aptitude Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container"> 
        <form action="index.php" method="post"> 
            <h4 class="display-4 text-center">Aptitude Test</h4>
            <hr><br>
            <div class="form-group">
                <label for="num" class="form-label">Please enter number from 1 - 20 </label>
                <input type="text" class="form-control" id="num" name="num" placeholder="Number">
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>