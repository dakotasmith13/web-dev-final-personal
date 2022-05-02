<?php
    include 'top.php';
?>
        <main>
            <h1>SQL</h1>

            <h2>Create table</h2>

            <pre>
                CREATE TABLE tblMaintenanceRecords(
                    pmkMaintenanceRecordsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    fldMileage VARCHAR(10),
                    fldDate VARCHAR(10),
                    fldMaintenancePerformed VARCHAR(150)
                )
            </pre>
            
            <h2>Insert Data</h2>
            <pre>
                INSERT INTO tblMaintenanceRecords
                (fldMileage, fldDate, fldMaintenancePerformed)
                VALUES
                ('~214,250', '4/25/22', 'Replaced wheels and tires (15 x 7 Sparco FF1's, 195/50R-15 Yokohama Advan Fleva V701 SL)'),
                ('~214,250', '4/25/22', 'Replaced windshield wipers'),
                ('~214,250', '4/26/22', 'PA state safety and emissions inspection (passed)'),
                ('~214,250', '4/26/22', 'Replaced soft top (Robbins soft top, glass rear window)'),
                ('~214,300', '4/27/22', 'Full interior detail'),
                ('~214,300', '4/27/22', 'Oil change'),
                ('~214,300', '4/27/22', 'Replaced alternator belt'),
                ('~214,300', '4/27/22', 'Replaced accessory belt (PS/AC)'),
                ('~214,300', '4/27/22', 'Replaced PCV hoses')
            </pre>

            <h2>Select Records</h2>
            <pre>
                SELECT fldMileage, fldDate, fldMaintenancePerformed FROM tblMaintenanceRecords
            </pre>

            <h2>Create table for form</h2>
            <pre>
                CREATE TABLE tblMiataSuggestionsForm(
                    pmkMiataSuggestionsFormID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    fldFirstName VARCHAR(25),
                    fldAge VARCHAR(3),
                    fldEmail VARCHAR(30),
                    fldCarEnthusiast VARCHAR(15),
                    fldMiataSuggestions TEXT
                )
            </pre>

            <h2>Insert Data</h2>
            <pre>
            ?, ?)
            </pre>    INSERT INTO tblMiataSuggestionsForm
                    (fldFirstName, fldAge, fldEmail, fldCarEnthusiast, fldMiataSuggestions)
                VALUES (?, ?, ?, 
        </main>

<?php
    include 'footer.php';
?>