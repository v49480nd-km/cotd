<!DOCTYPE html>
<html lang="en">
    <?php require "../templates/header.php"; ?>
    <body>
        <main>
            <section class="greeting">
                <p class="title">Set Theme</p>
                <article>
                    <form>
                        <label for"background">Background:</label>
                        <input type="color" id="background" name="background"><br>
                        <label for"secondground">Secondground:</label>
                        <input type="color" id="secondground" name="secondground"><br>
                        <label for"textcolor">Text:</label>
                        <input type="color" id="textcolor" name="textcolor"><br>
                        <label for"secondtext">Second Text:</label>
                        <input type="color" id="secondtext" name="secondtext"><br>
                        <label for"linkcolor">Link:</label>
                        <input type="color" id="linkcolor" name="linkcolor"><br>
                        <input type="submit" value="Submit">
                    </form>        
                </article>
            </section>
        </main>
        <?php require "../templates/footer.php"; ?>
    </body>
</html>
