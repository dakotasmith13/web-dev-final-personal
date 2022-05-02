    <?php
    include 'top.php';

    // initialize variables 
    $dataIsGood = false;
    $firstName = '';
    $age = '';
    $email = '';
    $carEnthusiast = 'No';
    $miataSuggestions = '';

    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = '';
        } 
        else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        // Check for letters, numbers and dash, period, space and single quote only.
        // added & ; and # as a single quote sanitized with html entities will have 
        // this in it bob's will be come bob's
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }
    ?>
        <main>
            <section class="form-banner">
                <h2>Have Any Suggestions?</h2>
            </section>

            <section class="actual-form">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    // sanitize data
                    $firstName = getData('txtFirstName');
                    $age = getData('txtAge');
                    $email = getData('txtEmail');
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                    $carEnthusiast = getData('radCarEnthusiast');
                    $miataSuggestions = getData('txtMiataSuggestions');

                    // validate form
                    $dataIsGood = true;
                    if ($firstName == '') {
                        print('<p class="mistake">Please enter your first name.</p>');
                        $dataIsGood = false;
                    } elseif (!verifyAlphaNum($firstName)) {
                        print('<p class="mistake">Your first name contains extra characters that are 
                        not allowed. Use only letters, numbers, hyphen, and a space. </p>');
                        $dataIsGood = false;
                    }

                    if ($age == '') {
                        print('<p class="mistake">Please enter your age.</p>');
                        $dataIsGood = false;
                    } elseif (!verifyAlphaNum($age)) {
                        print('<p class="mistake">Your age contains extra characters that are 
                        not allowed. Use only letters, numbers, hyphen, and a space. </p>');
                        $dataIsGood = false;
                    }

                    if ($email == '') {
                        print('<p class="mistake">Please enter your email.</p>');
                        $dataIsGood = false;
                    }
                    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Email address is not valid.";
                    }

                    if ($carEnthusiast != 'No' AND $carEnthusiast != 'Yes' AND $carEnthusiast != 'Somewhat') {
                        print('<p class="mistake">Please choose an option.</p>');
                        $dataIsGood = false;
                    }

                    if ($miataSuggestions == '') {
                        print('<p class="mistake">Please enter a suggestion for the Miata.</p>');
                        $dataIsGood = false;
                    } elseif (!verifyAlphaNum($miataSuggestions)) {
                        print('<p class="mistake">Your suggestion contains extra characters that are 
                        not allowed. Use only letters, numbers, hyphen, and a space. </p>');
                        $dataIsGood = false;
                    }

                    // save data
                    if ($dataIsGood) {
                        try { $sql = 'INSERT INTO tblMiataSuggestionsForm
                            (fldFirstName, fldAge, fldEmail, fldCarEnthusiast, fldMiataSuggestions)
                            VALUES (?, ?, ?, ?, ?)';
                            $statement = $pdo->prepare($sql);
                            $params = array($firstName, $age, $email, $carEnthusiast, $miataSuggestions);

                            if ($statement->execute($params)) {
                                print('<p>Record was successfully saved.</p>');
                                // send email
                                $to = $email;
                                $from = 'Kat & Dak <khughes2@uvm.edu>';
                                $subject = 'Kat\'s Miata Suggestion Box!';

                                $mailMessage = '<p style="font-size: 14pt;">';
                                $mailMessage .= "$firstName, ";
                                $mailMessage .= "Thank you for your suggestion for Kat's 1990 Miata! ";
                                $mailMessage .= '<table style ="border-color: #666; font-size: 14pt;">';
                                $mailMessage .= '<tr><td><strong>Name:</strong></td><td>' . $firstName . '</td></tr>';
                                $mailMessage .= '<tr><td><strong>Age:</strong></td><td>' . $age . '</td></tr>';
                                $mailMessage .= '<tr><td><strong>email:</strong></td><td>' . $email . '</td></tr>';
                                $mailMessage .= '<tr><td><strong>Are you a car enthusiast?:</strong></td><td>' . $carEnthusiast . '</td></tr>';
                                $mailMessage .= '<tr><td><strong>Suggestion::</strong></td><td>' . $miataSuggestions . '</td></tr>';

                                $headers = "MIME-Version: 1.0\r\n";
                                $headers .= "Content-type: text/html; charset=utf-8\r\n";
                                $headers .= "From: " . $from . "\r\n";

                                $mailSent = mail($to, $subject, $mailMessage, $headers);

                            }
                            else {
                                print('<p>Record was NOT successfully saved.</p>');
                            }    
                        }
                        catch (PDOEXCEPTION $e) {
                            print('<p>Couldn\'t insert the record, please contact someone.</p>');   
                        }
                    }
                }
                if ($dataIsGood) {
                    print('<h2>Thank you, your information has been received.</h2>');
                }
                ?>
                <h2>Let us know if you have any suggesstions for my 1990 Miata!</h2>
                <form action="#" id="frmMiataSuggestions" method="POST">
                    <fieldset class="contact">
                        <legend>Contact Information</legend> 
                        <p>
                            <label class="required" for="txtFirstName">First Name</label>
                            <input id="txtFirstName" maxlength="25" name="txtFirstName" type="text" value="<?php print $firstName; ?>" required>
                        </p>
                        <p>
                            <label class="required" for="txtAge">Age</label>
                            <input id="txtAge" maxlength="3" name="txtAge" type="text" value="<?php print $age; ?>" required>
                        </p>
                        <p>
                            <label class="required" for="txtEmail">Email</label>
                            <input id="txtEmail" maxlength="30" name="txtEmail" type="email" value="<?php print $email; ?>" required>
                        </p>
                    </fieldset>    
                    <fieldset class="radio">
                        <legend>Are you a car enthusiast?</legend>
                        <p>
                            <input type="radio" id="radCarEnthusiastYes" name="radCarEnthusiast" value="Yes" required <?php if ($carEnthusiast == "Yes") print 'checked'; ?>>
                            <label class="radio-field" for="radCarEnthusiastYes">Yes</label> 
                        </p> 
                        <p>
                            <input type="radio" id="radCarEnthusiastSomewhat" name="radCarEnthusiast" value="Somewhat" required <?php if ($carEnthusiast == "Somewhat") print 'checked'; ?>>
                            <label class="radio-field" for="radCarEnthusiastSomewhat">Somewhat</label> 
                        </p> 
                        <p>
                            <input type="radio" id="radCarEnthusiastNo" name="radCarEnthusiast" value="No" required <?php if ($carEnthusiast == "No") print 'checked'; ?>>
                            <label class="radio-field" for="radCarEnthusiastNo">No</label>
                        </p>
                    </fieldset>

                    <fieldset class="textarea">
                        <legend>Suggestions?</legend>
                        <p>
                            <label for="txtMiataSuggestions">What modification suggestions do you have for the Miata?</label>
                            <textarea id="txtMiataSuggestions" name="txtMiataSuggestions" rows="4" required><?php print $miataSuggestions; ?></textarea>
                        </p>
                    </fieldset>
                    <fieldset class="button">
                        <p>
                            <input id="btnSubmit" name="btnSubmit" type="submit" value="SUBMIT">
                        </p>
                    </fieldset>
                </form>
            </section>
        </main>
    <?php
    include 'footer.php';
    ?>

        