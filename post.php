<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
                break;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>

        <div class="img-container">
            <img src="<?= $BASE_URL ?>img/<?=$currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
        </div>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa distinctio dolor vel necessitatibus, ipsa minima voluptas libero magnam quae aut consequatur obcaecati eius quaerat, unde voluptatibus deserunt nostrum. Vitae, quibusdam.
        Quasi omnis cumque soluta animi dignissimos molestiae possimus odit incidunt nesciunt alias quae numquam fugit voluptate libero, beatae nostrum assumenda corporis sapiente eum praesentium. Ratione sequi labore maxime est earum.
        Optio, asperiores. Expedita accusantium unde molestias optio cumque sed quasi eius nobis minima id deserunt dicta, eligendi maxime dolor, ut error harum nesciunt adipisci debitis velit beatae assumenda accusamus! Aperiam.
        Tenetur molestias officia laboriosam perspiciatis necessitatibus quas? Adipisci omnis pariatur delectus eos illum assumenda labore veniam quas enim reiciendis. Ab nulla porro eum totam dolores incidunt magni voluptates possimus nostrum.
        Ea libero aperiam aut optio est dicta numquam magnam doloremque mollitia natus ipsum tempora fuga consequatur quo sunt ipsam facilis, nostrum dolore, vero, maxime delectus! Odit quasi ex iusto architecto.</p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>

        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>

        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>



<?php
    include_once("templates/footer.php");
?>