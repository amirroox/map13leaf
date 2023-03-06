<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/vendor/leaflet/leaflet.css">
    <script src="<?=BASE_URL?>/assets/vendor/leaflet/leaflet.js"></script>
    <title>Maps 13</title>
</head>
<body>
    <form action="">
        <label>
            <input type="text" id="inp" placeholder="Where are you looking for?">
        </label>
    </form>
    <div class="modal-overlay" style="display: none">
        <div class="modal">
            <span class="close-modal">X</span>
            <h3>Submit Location</h3>
            <div class="content-modal">
                <form action="javascript:void(0)" method="post" id="addLocation">
                    <div class="field-row">
                        <div class="field-title">Coordinates</div>
                        <div class="field-content">
                            <label for="lat"> latitude :
                                <input type="text" name="lat" id="lat" readonly value="latitude">
                            </label> ,
                            <label for="lng"> longitude :
                                <input type="text" name="lng" id="lng" readonly value="longitude">
                            </label>
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">Name Of Place</div>
                        <div class="field-content">
                            <label for="name_place">
                                <input type="text" name="name_place" id="NameOfPlace" required placeholder="Example : Ro-ox Office">
                            </label>
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">Type Place</div>
                        <div class="field-content">
                            <label for="type_loc" class="select_opt">
                                <select name="Type_place" id="type_loc">
                                    <?php foreach (locationTypes as $key => $value) : ?>
                                    <option value="<?=$key?>"><?=$value?></option>
                                    <?php endforeach;?>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="field-row" style="justify-content: center;">
                        <button type="submit" id="Sub_loc">Submit</button>
                    </div>
                    <div id="ajax-result" style="margin-bottom:20px "></div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="map"></div>
    <script src="<?=BASE_URL?>/assets/vendor/jquery.min.js"></script>
    <script src="<?=BASE_URL?>/assets/js/script.js"></script>

</body>
</html>
