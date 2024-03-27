<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <title>Edit Category</title>
</head>
<body>
  <div class="container px-5 py-5">
<form method="POST" action="{{route('categorie.update',['categorie'=>$categorie])}}">
  @csrf
  @method("put")
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" value="{{$categorie->name}}" id="name" name="name" placeholder="Enter category name">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="Enter category description">{{$categorie->description}}</textarea>
  </div>

  <input type="hidden" value="{{$categorie->id}}">
  <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> update the  Category</button>
</form>
</div>
</body>
</html>