<?php
$pageTitle = "Suggest a Media Item";
$section = "suggest";
include("includes/header.php"); ?>

    <div class="section page">
        <div class="wrapper">
            <h1>Suggest a Media File</h1>
            <p>If you think something I'm missing, let me know! Complete the form to send me an email.</p>

            <form method="post">
                <table>
                    <tr>
                        <th><label for="name">Name</label></th>
                        <td><input type="text" name="name" id="name"></td>
                    </tr>
                    <tr>
                        <th><label for="email">Name</label></th>
                        <td><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <th><label for="details">Suggest Item Details</label></th>
                        <td><textarea name="details" id="details" placeholder="Insert Text Here"></textarea></td>
                    </tr>
                </table>
                <input type="submit" value="Send">
            </form>

        </div>

    </div>
    </div> <!-- end content -->

<?php include("includes/footer.php"); ?>