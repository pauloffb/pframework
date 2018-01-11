# PFramework

Super simple PHP framework

## Install and Configuration

Copy files to...

Change configuration in ```app/config/config.php```

Check ```.htacess``` inside public folder and set path of RewriteBase

## Model

### Create and use a model

Inside models folder create a file with the name of the model in singular mode, for example Post.php

Then use the following code as example

```
<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}
```

It is always good idea to have your model in singular and your controller in plural, so the controller for handling this Post model would be Posts.php

So inside the controller Post.php the following code would be necessary to instantiate the model

```
$this->postModel = $this->model('Post');
```

### Use a model to query results

Use the following example to retrieve all records as an array

```
  public function getPosts()
    {
        $this->db->query("SELECT * FROM posts");
        return $this->db->resultSet();
    }
```

Then on the controller method where the results are to be expected use the following

```
public function index()
{
    $posts = $this->postModel->getPosts();
    $data = [
        'title' => 'Homepage',
        'posts' => $posts
    ];
}
```

### Display the results in the view

To display the results of your query inside the view use the following code as an example

```
<?php foreach ($data['posts'] as $post) : ?>
    <li>
        <?= $post->title; ?>
    </li>
<?php endforeach; ?>
```    
