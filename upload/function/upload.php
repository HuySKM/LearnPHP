        <!DOCTYPE html>
        <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Upload Form</title>
                </head>
        <body>
        <h1> Upload hình ảnh</h1>

        <form id="myForm" name="myForm" method="post" enctype="multipart/form-data" action="process.php">

            <input type="file" name="upload" id="upload" />
            <br></br>

            <input type="submit" name="button" id="button" value="Submit" />
        </form>

        </body>
        </html>