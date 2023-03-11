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
        .enable {
            background-color: #12c312;
            color: white;
        }
        .exit {
            float: right;
        }
        a {
            padding: 8px 18px;
            border-radius: 15px;
            border: none;
            background-color: #e8e8e8;
            display: inline-block;
            font-size: 14px;
            color: unset;
            text-decoration: none;
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
    </style>
</head>
<body>
<h1>Admin Panel Maps</h1>
<div class="menu">
<a class="home" href="<?=BASE_URL?>"> &#127968; </a>
<a class="enable" href="?status=1">enable</a>
<a class="disabled" href="?status=0">disabled</a>
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
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
            <tr>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
                <td>hello</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
<script>
    if ( window.history.replaceState ) {  /* Prevent confirm form resubmission */
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
