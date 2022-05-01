    <?php
    include 'top.php';
    ?>
        <main>
            <section class="home-banner"> 
                <h1>First Section Title</h1>
                <h3>Description</h3>
            </section>
            <section class="kindness-paragraph">
                <h2>First Section</h2>
                <p>
                </p> 
                <p>
                </p>
            </section>

            <section class="kindness-examples">
                <h3>List</h3>
                <ul>
                </ul>
            </section>

            <section class="compliment-table">
                <h2>Table</h2>
                <table>
                    <caption>Table Caption</caption>
                    <tr>
                    </tr>
                  
                    <?php
                    
                    $sql = 'SELECT fldPersonality, fldAppearance, fldLifestyle FROM tblComplimentIdeas';
                    $statement = $pdo->prepare($sql);
                    $statement->execute();

                    $records = $statement->fetchAll();

                    foreach ($records as $record) {
                        print "<tr>";
                        print "<td>" . $record['fldPersonality'] . "</td>";
                        print "<td>" . $record['fldAppearance'] . "</td>";
                        print "<td>" . $record['fldLifestyle'] . "</td>";
                        print "</tr>" . PHP_EOL;
                    }
                    ?>
                    <tr>
                        <td colspan="3">Source: <cite><a href="https://www.verywellmind.com/positivity-boosting-compliments-1717559"
                        target="_blank">https://www.verywellmind.com/positivity-boosting-compliments-1717559</a></cite></td>
                    </tr>
                </table>
            </section>
        </main>
    <?php
    include 'footer.php';
    ?>


        