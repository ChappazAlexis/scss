<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="./dist/article.css">
</head>

<body>
    <? include './header.php'; ?>
    <main>
        <div class="article">

            <div class="image">
                <img src="./img/asterix.jpeg" alt="">
            </div>

            <div class="info">
                <p>Auteur : Alexis Chappaz / Catégorie : divers / Commentaires : 2</p>
            </div>

            <div class="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque libero numquam. Officiis
                similique, deserunt in labore dolore voluptatum accusantium quisquam nam laborum, iusto voluptatibus
                dignissimos accusamus quos sit vero?
                Suscipit consequatur facilis aspernatur magnam veritatis, dolores nesciunt. Nisi, est eaque. Quaerat
                sint perspiciatis corporis commodi accusantium tempora atque quam suscipit ipsa delectus, natus
                explicabo minus doloribus aspernatur illo dicta!
                Perferendis placeat sit eaque! Libero eveniet doloribus sunt mollitia. Veritatis, porro? Cum porro sed
                quia quisquam voluptas illum architecto omnis error alias! Dicta consectetur beatae consequatur facere
                reiciendis soluta quis!
                Earum, accusantium! Asperiores placeat aspernatur impedit magni, praesentium reprehenderit? Nam,
                repellat nobis totam debitis ipsam et nulla cum sequi neque molestias minima voluptatem, facilis
                voluptatibus dolores, explicabo in rem odit.
                Culpa nesciunt tempore doloremque ut eos beatae officiis sunt cupiditate, asperiores vel dolore ipsum
                inventore quis reprehenderit soluta consectetur, dicta ullam fuga rerum! Laborum, animi id dolores velit
                deleniti atque.
            </div>
        </div>

        <aside>
            <div class="imgAside">
                <img src="./img/adblock.png" alt="">
            </div>

            <div class="asideContent">
                <div class="articles">
                    <ul>
                        <h2>Articles</h2>
                        <li>Article 1</li>
                        <li>Article 2</li>
                        <li>Article 3</li>
                    </ul>
                </div>
                <div class="categories">
                    <ul>
                        <h2>Catégories</h2>
                        <li>Catégorie 1</li>
                        <li>Catégorie 2</li>
                        <li>Catégorie 3</li>
                    </ul>
                </div>

                <div class="contact">
                    <h2>Contact</h2>
                    <p>1 Place Charles Hernu</p>
                    <p>69100, Villeurbanne</p>
                    <p>mail@mail.com</p>
                </div>
            </div>
        </aside>
    </main>
    <? include './footer.php'; ?>
</body>

</html>