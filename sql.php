<?php
    include 'top.php';
?>
        <main>
            <h1>SQL</h1>
            <h2>Create table</h2>
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
            <h2>Select Records</h2>
            <pre>
                SELECT fldFirstName, fldAge, fldEmail, fldCarEnthusiast, fldMiataSuggestions FROM tblMiataSuggestionsForm
            </pre>
            
            <h2>Insert Data</h2>
            <pre>
            INSERT INTO tblMiataSuggestionsForm
                (fldFirstName, fldAge, fldEmail, fldCarEnthusiast, fldMiataSuggestions)
            VALUES (?, ?, ?, ?, ?)
            </pre>
        </main>

<?php
    include 'footer.php';
?>