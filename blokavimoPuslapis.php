<!DOCTYPE html>
<html>
    <head>
        <title>Pagrindinis Puslapis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      </head>

    <body>
    <?php include("header.php");?>

        <div style="margin:auto;max-width:800px">
            <a href="naudotojoPuslapis.php">ATGAL</a>
            <form>
                <table class="table center">
                    <tr>
                        <td>Naudotojas:</td>
                        <td>XYZ</td>
                    </tr>
                    <tr>
                        <td>Blokavimo priežastis</td>
                        <td>
                            <textarea name="reason"> </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td aling="right"><button type="submit" class="btn btn-danger">BLOKUOTI</button></td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
</html>