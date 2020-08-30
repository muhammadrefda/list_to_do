<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    
    <h1>ini category</h1>
    
    <div class="test-data">
    @foreach($categories as $category)
    <h3>{{ $category->name }}</h3>
    @endforeach
    </div>

</body>
</html>