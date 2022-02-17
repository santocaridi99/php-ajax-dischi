<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DischiVue.php</title>
    <!-- importo axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- importo vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- importo il css -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div id="app">
        <header></header>
        <main>
            <!-- stessa cosa di dischi.php -->
            <!-- stampo i dischi solamente con php -->
            <!-- nel container passerò con inlcude cartella Cardbox presente nel template -->
            <div class="main-container">
                <?php include __DIR__ . "/template/CardBox.php" ?>
            </div>
        </main>
        <footer></footer>
    </div>
    <!-- importo lo script -->
    <script src="./js/script.js"></script>
</body>

</html>