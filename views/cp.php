<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: IRANSans, sans-serif;
        }
        body {
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            padding: 100px;
            align-items: center;
            justify-content: center;
            background-color: #eaeaea;
            gap: 21px;
        }
        div.menu , div.list {
            width: 100%;
            padding: 10px;
            background-color: white;
            border-radius: 7px;
        }
        .exit {
            float: right;
        }
        div.menu a , div.list a {
            padding: 8px 18px;
            border-radius: 15px;
            border: none;
            background-color: #e8e8e8;
            display: inline-block;
            font-size: 14px;
            color: unset;
            text-decoration: none;
        }
        .enable {
            background-color: #12c312 !important;
            color: white;
        }
        .disabled {
            background-color: #c31212 !important;
            color: white;
        }
        table.list_loc {
            width: 100%;
            text-align: left;
            padding: 13px;
            border-collapse: collapse;
        }
        table.list_loc tr{
            height: 40px;
        }
        table.list_loc tr td {
            padding-left:10px;
        }
        table.list_loc thead tr{
            border-bottom: 1px solid gray;
        }
        table.list_loc tbody tr:nth-child(even) {
            background-color: #ededed;
        }
        i {
            background-color: #45ba6a;
            padding: 3px 7px;
            text-align: center;
            font-size: 13px;
            border-radius: 8px;
            font-style: normal;
            color: white;
            width: 190px;
            /*float: right;*/
        }
        td.nameOfPlace {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        a#Delete_ID , a#Preview {
            font-size: 30px;
            cursor: pointer;
            padding: unset;
            background-color: unset;
        }
        a#Delete_ID:hover , a#Preview:hover {
            color: #030dca;
        }
        #preview {
            width: 80vw;
            height: 70vh;
            /*background-color: #8e8e8e;*/
            overflow: hidden;
            position: absolute;
            display: none;
            border: 2px solid black;
            border-radius: 12px;
            top: 50%;
            transform: translateY(-50%);
        }
        span.close_preview {
            z-index: 999;
            background-color: black;
            position: absolute;
            padding: 13px;
            font-size: 24px;
            right: 13px;
            top: 10px;
            border-radius: 50%;
            color: wheat;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/leaflet/leaflet.css">
    <script src="<?=BASE_URL?>assets/vendor/leaflet/leaflet.js"></script>
</head>
<body>
    <h1>Admin Panel Maps</h1>
    <div class="menu">
<a class="home" href="<?=BASE_URL?>"> &#127968; </a>
<a class="enable" href="?status=1">enable</a>
<a class="disabled" href="?status=0">disabled</a>
<a href="?status=-1">ALL</a>
<a class="exit" href="?logout=1">&#128682; Exit</a>
</div>
    <div class="list">
    <table class="list_loc">
        <thead>
            <tr>
                <th>Name Of Place</th>
                <th>Date Of Created</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($location_list as $key => $value) : ?>
            <tr>
                <td class="nameOfPlace">
                    <span>
                        <a id="Preview" onclick="open_preview(<?= $value['lat'] ?>,<?= $value['lng'] ?>,'<?= $value['title'] ?>')">👁</a>
                        <a id="Delete_ID" href="?del_id=<?=$value['id']?>"
                           onclick="return confirm('Are You Sure ?')">
                            🗑
                        </a>
                    </span>
                    <?= $value['title'] ?>
                    <i style="background-color: <?=locationColor[$value['type']]?>">
                        <?= locationTypes[$value['type']] ?>
                    </i>
                </td>
                <td><?= date('Y-m-d H:i',strtotime($value['created_at'])) ?></td>
                <td><?= $value['lat'] ?></td>
                <td><?= $value['lng'] ?></td>
                <td><a id="toggle_status" class="<?= $value['status']==0 ? 'disabled' : 'enable' ?>"
                       href="?chg_status=<?= $value['id'] ?>"></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <div id="preview"><span class="close_preview">X</span></div>
</body>
<script src="<?=BASE_URL?>assets/vendor/jquery.min.js"></script>
<script>
    if ( window.history.replaceState ) {  /* Prevent confirm form resubmission */
        window.history.replaceState( null, null, window.location.href );
    }
    let preview = $('#preview');
    let map_preview ;
    function open_preview(lat , lng , title='name') {
        preview.fadeIn(1000);
        preview.css('display','unset');
        map_preview = L.map('preview').setView([lat, lng], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            minZoom:2 ,
            maxZoom: 19,
            attribution: '<a href="https://www.ro-ox.com/" target="_blank">ro-ox</a>' ,
            noWrap:true
        }).addTo(map_preview);
        L.marker([lat, lng]).addTo(map_preview).bindPopup(title).openPopup();
    }
    $('span.close_preview').on('click',function (){
        preview.fadeOut(700);
        map_preview.remove();
    })
</script>
</html>
