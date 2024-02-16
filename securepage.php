<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrogeek Sagar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
</head>

<body style="background-color: #f8f9fa;">

    <div class="container p-3 mb-4">
        <h1 class="mt-4 text-center mb-4">SECURE WEB PAGE</h1>
        <p class="mt-4">Coded by <strong>astrogeek sagar</strong></p>
        <a href="https://astrogeeksagar.com/" class="btn btn-primary" target="_blank">Learn More</a>
        <a class="btn btn-danger" target="_blank" href="https://github.com/astrogeeksagar/javascript/edit/main/securepage.php">View Code</a>
        <div class="row">
            <div class="col-md-10">
                <p class="lead">Description:</p>
                <ul class="list-group">
                    <li class="list-group-item">The "Secure Web Page" is a meticulously crafted interface fortified with robust security measures.</li>
                    <li class="list-group-item">It utilizes JavaScript functionality to impose restrictions on specific actions, ensuring heightened protection for sensitive content.</li>
                    <li class="list-group-item">By intercepting key events such as Ctrl+P (Print), Ctrl+S (Save), and Ctrl+Shift+I (Inspect), users are prevented from executing these commands.</li>
                    <li class="list-group-item">Furthermore, right-click functionalities such as copy and cut are disabled, thwarting unauthorized access to the information presented.</li>
                    <li class="list-group-item">These security measures are indispensable for environments where data confidentiality is paramount, such as financial portals, educational platforms, or proprietary information repositories.</li>
                    <li class="list-group-item">The "Secure Web Page" serves as a bastion of security, fortifying the integrity of the content displayed and offering peace of mind to users.</li>
                </ul>
            </div>
        </div>

        <!-- Bootstrap JS, Optional -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<script>
    window.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
    document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'u') {
            event.preventDefault();
        }
        if (event.ctrlKey && event.shiftKey && event.key === 'I') {
            event.preventDefault();
        }
        if (event.ctrlKey && event.key === 'p' || event.ctrlKey && event.shiftKey && event.key === 'P') {
            event.preventDefault();
        }
        if (event.ctrlKey && event.key === 'c' || event.ctrlKey && event.shiftKey && event.key === 'C') {
            event.preventDefault();
        }
        if (event.ctrlKey && event.key === 's' || event.ctrlKey && event.shiftKey && event.key === 'S') {
            event.preventDefault();
        }
    });

    window.addEventListener("keyup", function(e) {
        if (e.keyCode == 44) {
            e.preventDefault();
        }
    });
</script>
