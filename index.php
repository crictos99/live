<?php
// Fetch data from the URL
$url = 'https://raw.githubusercontent.com/byte-capsule/FanCode-Hls-Fetcher/refs/heads/main/Fancode_hls_m3u8.Json';
$response = file_get_contents($url);
$data = json_decode($response, true);

// Check if the data is successfully retrieved and parsed
if ($data === null || empty($data['matches'])) {
    echo 'Error fetching or decoding data, or no matches available';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOKIIPTV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .header-container {
            background-color: #f8f8f8;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .header-container h1 {
            font-family: 'Gloock', serif;
            font-weight: bold;
            font-size: 28px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding-top: 100px;
        }

        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: calc(100% / 3 - 40px);
            max-width: 300px;
            flex: 1 1 auto;
            box-sizing: border-box;
        }

        @media (max-width: 1200px) {
            .card {
                width: calc(100% / 2 - 40px);
            }
        }

        @media (max-width: 768px) {
            .card {
                width: calc(100% - 40px);
            }
        }

        .button {
            background-color: red;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="header-container">
            <h1 id="title">FANCODE</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <?php eval(base64_decode('CiBmb3JlYWNoICgkZGF0YVsiXDE1NVwxNDFceDc0XHg2M1x4NjhceDY1XDE2MyJdIGFzICRtYXRjaCkgeyA/Pgo8ZGl2IGNsYXNzPSJjYXJkIj48aW1nIGFsdD0iQmFubmVyInNyYz0iPD9waHAgIGVjaG8gaHRtbHNwZWNpYWxjaGFycygkbWF0Y2hbIlwxNDJcMTQxXHg2ZVx4NmVcMTQ1XHg3MiJdKTsgPz4KInN0eWxlPSJ3aWR0aDoxMDAlO2JvcmRlci1yYWRpdXM6MTBweCI+PGgyPjw/cGhwICBlY2hvIGh0bWxzcGVjaWFsY2hhcnMoJG1hdGNoWyJcMTQ1XHg3NlwxNDVcMTU2XHg3NFwxMzdceDZlXHg2MVx4NmRceDY1Il0pOyA/Pgo8L2gyPjxwPjxzdHJvbmc+Q2F0YWdvcnk6PC9zdHJvbmc+PD9waHAgIGVjaG8gaHRtbHNwZWNpYWxjaGFycygkbWF0Y2hbIlwxNDVcMTY2XHg2NVwxNTZcMTY0XHg1Zlx4NjNcMTQxXDE2NFx4NjFceDY3XHg2ZlwxNjJcMTcxIl0pOyA/Pgo8L3A+PHA+PHN0cm9uZz5UZWFtczo8L3N0cm9uZz48P3BocCAgZWNobyBodG1sc3BlY2lhbGNoYXJzKCRtYXRjaFsiXDE2NFx4NjVceDYxXHg2ZFx4NWZceDMxIl0pOyA/Pgp2czw/cGhwICBlY2hvIGh0bWxzcGVjaWFsY2hhcnMoJG1hdGNoWyJceDc0XDE0NVx4NjFceDZkXDEzN1w2MiJdKTsgPz4KPC9wPjxwPjxpbWcgYWx0PSI8P3BocCAgZWNobyBodG1sc3BlY2lhbGNoYXJzKCRtYXRjaFsiXDE2NFx4NjVceDYxXDE1NVwxMzdceDMxIl0pOyA/PgpGbGFnInNyYz0iPD9waHAgIGVjaG8gaHRtbHNwZWNpYWxjaGFycygkbWF0Y2hbIlx4NzRcMTQ1XHg2MVwxNTVcMTM3XDYxXHg1Zlx4NjZcMTU0XHg2MVx4NjciXSk7ID8+CiJzdHlsZT0id2lkdGg6NTBweDtoZWlnaHQ6NTBweCI+IHZzIDxpbWcgYWx0PSI8P3BocCAgZWNobyBodG1sc3BlY2lhbGNoYXJzKCRtYXRjaFsiXHg3NFx4NjVcMTQxXDE1NVwxMzdcNjIiXSk7ID8+CkZsYWcic3JjPSI8P3BocCAgZWNobyBodG1sc3BlY2lhbGNoYXJzKCRtYXRjaFsiXDE2NFwxNDVceDYxXDE1NVx4NWZceDMyXHg1Zlx4NjZcMTU0XHg2MVx4NjciXSk7ID8+CiJzdHlsZT0id2lkdGg6NTBweDtoZWlnaHQ6NTBweCI+PC9wPjxwPjxzdHJvbmc+U3RyZWFtIExpbms6PC9zdHJvbmc+IDxhIGNsYXNzPSJidXR0b24iaHJlZj0iZmFtLnBocD91cmw9PD9waHAgIGVjaG8gdXJsZW5jb2RlKCRtYXRjaFsiXDE2M1wxNjRceDcyXHg2NVwxNDFcMTU1XDEzN1wxNTRceDY5XDE1NlwxNTMiXSk7ID8+CiI+V2F0Y2ggSGVyZTwvYT48L3A+PHA+PHN0cm9uZz5DcmVkaXQ6PC9zdHJvbmc+IExPS0lJUFRWPC9wPjwvZGl2Pjw/cGhwICB9IA==')); ?>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>