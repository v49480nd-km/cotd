<!DOCTYPE html>
<html lang="en">
    <?php require "../templates/header.php"; ?>
    <body>
        <main>
            <section class="greeting">
                <p class="title">Set Theme</p>
                <article>
                    <form>
                        <label for"foreground">Foreground:</label>
                        <input type="color" id="foreground" name="foreground"><br>
                        <label for"background">Background:</label>
                        <input type="color" id="background" name="background"><br>
                        <label for"textcolor">Text:</label>
                        <input type="color" id="textcolor" name="textcolor"><br>
                        <label for"linkcolor">Link:</label>
                        <input type="color" id="linkcolor" name="linkcolor"><br>
                        <input type="submit" value="Submit">
                    </form>        
                </article>
            </section>
        </main>
    </body>
</html>
