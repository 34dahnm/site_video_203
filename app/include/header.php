<!-- HEADER -->
<?php
include("path.php");
?>
<div class = "header">
    <div class ="container-fluid">
        <div class = "container">
            <div class = "row">
                <div class = "col-3">
                    <h1><a href = "<?php echo BASE_URL?>">ACountry</a></h1>
                </div>

                <div class = "col-9">
                    <ul>
                        <li><a href = "#">Список аниме</a></li>
                        <li>
                            <a href = "#">
                                Кабинет
                            </a>
                            <ul>
                                <li><a href = <?php echo BASE_URL . 'log.php'?>>Админ панель</a></li>
                                <li><a href = "#">Выход</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER -->