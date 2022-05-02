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
            <section class="home-heading">
                <h2>SPECS</h2>
            </section>
            
            <section class="home-text-right">
                <h2>RECENT UPDATES</h2>
                <p>I bought the Miata with about 214,100 miles on the odometer, and while the paint and exterior
                    was in a bit of rough shape, it was mechanically sound. It was able to drive from Delaware to
                    Pennsylvania on the day of sale without and mechanical issues. Once in Pennsylvania, there
                    were a few things that needed to be done to pass inspection, and to get it running even
                    smoother. I replaced the stock 14 inch daisy wheels with a set of 15 inch Sparco FF1’s and a
                    new set of summer performance tires since the tires that came with the car were dry rotted. I
                    also spent a day replacing the ripped up leaking soft top with a brand-new Robbins soft top.
                    Other basic maintenances were performed to ensure the car was in good shape.
                </p>
            </section>
            <section class="home-image-right">
                <h2 hidden>Photo</h2>
                <figure>
                    <img alt="2022 Miata" src="images/modern_miata.jpg">
                    <figcaption><cite><a href="https://www.carscoops.com/2022/02/2022-mazda-mx-5-miata-configurator-is-live-show-us-your-build/" 
                    target="_blank">Source</a></cite></figcaption>
                </figure>
            </section>
            <section class="home-text-left"> 
                <h2>SERVICE RECORDS</h2>
                <p>The previous owners were extremely meticulous with keeping records for everything that was
                    done to the Miata, they even kept the receipts for minor things like windshield wipers. Keeping
                    a detailed service history on a vehicle can show how well the car has been taken care of in the
                    past. It allowed me to determine how the vehicle has been treated in the past and will help me
                    determine what parts are due to replaced soon, and what parts have been recently replaced or
                    serviced. To continue the detailed service records kept by all the previous owners, I will also be
                    keeping detailed records of what maintenance I perform and what parts I install. Below is the
                    current service records for the Miata since I bought it on 4/24/22.
                </p>
            </section>   
            <section class="home-text-right-2">
                <h2>FUTURE UPDATES</h2>
                <p>There is a lot I plan on doing with the Miata in the future. There is a minor oil leak in both the
                    rear main seal and the valve cover gasket. Both of those will be replaced in the future, I already
                    have the part for the valve cover gasket, and I have a new clutch I can put in when I do the rear
                    main seal as well. The new clutch has a lightened flywheel for quicker revs and better
                    performance. On top of that, I have a Hard Dog M2 Double Diagonal roll bar that needs to be
                    installed. The Miata could use some brighter headlights as well as some paint restoration.
                    Other than that, I have a lot of ideas about what could be done with the Miata, I just haven’t
                    put a plan together about exactly what I plan on doing. If you have any ideas or suggestions
                    about what I should do with the Miata, please fill out the form on the suggestions page!
                </p>
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
            </section>

        </main>
    <?php
    include 'footer.php';
    ?>
        