    <?php
    include 'top.php';

    $kindestActors = array(
        array('Oprah Winfrey', '01/29/54', 'Oprah Winfrey Show'),
        array('Jennifer Lawrence', '08/15/90', 'The Hunger Games'),
        array('Tom Hanks', '07/9/56', 'Forrest Gump'),
        array('Taylor Swift', '12/13/89', 'Many grammy nominated albums'),
        array('Keanu Reeves', '9/2/64', 'The Matrix')
    );

    ?>
        <main class="details">
            <section class="about-banner">
                <h1>MIATA BUILD</h1>
            </section>
            <section class="rosa-parks-image">
                <h2>In the News</h2>
                <figure>
                    <img alt="Dick Pontzloff" src="images/garbage-man.jpg">
                    <figcaption><cite><a href="https://majically.com/mystery-garbage-man-solved-after-neighbors-finally-discover-man-bringing-up-bins/" target="_blank">Majically</a></cite></figcaption>
                </figure>
            </section>

            <section class="rosa-parks-text">
                <h2>The Garbage Man</h2>
                <p>Residents in Appleton, Wisconsin are no strangers to acts of kindness. 
                In the midst of winter, neighbors started to realize that on garbage days, 
                their garbage cans were being moved back up their driveways. 
                At first, the neighbors thought that it was the garbage company, 
                after more investigating, they found that they were not the culprit. 
                On the day before Christmas Eve, Melody Luttenegger left a gift for the person, 
                and waited for them to come. At 8:21am, her 75 year-old neighbor, Dick Pontzloff,
                came up the driveway carrying her garbage cans. After retiring, 
                Dick found himself tired of doing nothing, and started collecting everyone
                in the neighborhood’s garbage cans. I think many of us could learn from Dick’s action of kindness.
                </p>  
                <cite><a href="https://www.goodnewsnetwork.org/mystery-garbage-man-revealed-in-wisconsin-neighborhood/">Source</a></cite>
            </section>

            <section class="gandhi-image">
            <h2>In Hollywood</h2>
                <figure>
                    <img alt="Finding Nemo" src="images/finding-nemo.jpeg">
                    <figcaption><cite><a href="https://movies.disney.com/finding-nemo" target="_blank">Disney</a></cite></figcaption>
                </figure>
            </section>
            
            <section class="gandhi-text">
                <h2>Movies with Kindness</h2>
                <p>With all of the bad in the world, movies are a common place for many to escape. There are
                    numerous movies that have kindness as the central theme running through them. We see 
                    animated movies like <em>Meet the Robinsons</em>, <em>Finding Nemo</em>, and <em>Paddington</em>
                    which are all feel good movies. In each of these, we see other characters going out of their way
                    to help someone they normally would not. There are also movies such as <em>Wonder</em>, 
                    <em>Charlotte's Web</em>, and <em>Fly Away Home</em> that embrace kindness. Putting these
                    movies with kindness deep rooted into the plot is very important to society. In today's world 
                    we see enough tragedy, to have all of our movies filled with the same. 
                </p> 
                <cite><a href="https://biglifejournal.com/blogs/blog/top-kindness-friendship-movies">Source</a></cite>
            </section>   
            
            <section>
                <h3>Top <?php print count($kindestActors); ?> Kindest Actors</h3>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Known for</th>
                    </tr>
                    <?php
                    foreach ($kindestActors as $kindestActor) {
                        print '<tr>';
                        print '<td>' .  $kindestActor[0] . '</td>';
                        print '<td>' .  $kindestActor[1] . '</td>';
                        print '<td>' .  $kindestActor[2] . '</td>';
                        print '</tr>' . PHP_EOL;
                    }
                    ?>
                </table>
                <cite><a href="https://www.more.com/celebrity/20-nicest-celebrities-hollywood/">Source</a></cite>
            </section>
        </main>
    <?php
    include 'footer.php';
    ?>
        