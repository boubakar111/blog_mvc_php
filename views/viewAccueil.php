<?php foreach ($articles as $article):?>
    <h1 class="my-4"> <?php echo $article->getCategoryName();?></h1>

    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top"
             src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg"
             alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">Serengeti</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid
                atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="post&id=<?= $article->getid() ?>" class="btn btn-primary">Read More →</a>
        </div>
        <div class="card-footer text-muted">
            Posted on <?php echo $article->getPostingDate(); ?>
            <a href="#">Start Bootstrap</a>
        </div>
    </div>

<?php endforeach; ?>