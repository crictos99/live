<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Match - </title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            text-align: center;
        }
        #jwplayerDiv {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
        }
        .message-container {
            max-width: 600px;
            padding: 20px;
            background-color: #444;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .message-container p {
            margin: 10px 0;
        }
        .join-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .join-button:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://content.jwplatform.com/libraries/SAHhwvZq.js"></script>
</head>
<body>
            <div id="jwplayerDiv"></div>
        <script type="text/javascript">
            // Function to intercept network requests
            function interceptNetworkRequests() {
                const originalOpen = XMLHttpRequest.prototype.open;
                XMLHttpRequest.prototype.open = function(method, url) {
                    if (url.startsWith('https://sonydaimenew.akamaized.net/')) {
                        url = url.replace('sonydaimenew.akamaized.net', 'sony.cricsterspkl.io/event.php');
                    } else if (url.startsWith('https://sonypartnersdaimenew.akamaized.net/')) {
                        url = url.replace('sonypartnersdaimenew.akamaized.net', 'sony.cricsterspkl.io/event.php');
                    }
                    return originalOpen.apply(this, arguments);
                };
            }

            // Call the intercept function
            interceptNetworkRequests();

            // Set up JWPlayer with playlist
            var playerSetup = {
                playlist: [
                    {
                        title: "",
                        description: "You're Watching",
                        sources: [
                            {
                                file: "https://sonydaimenew.akamaized.net/hls/live/2094588/DAI04ME-V3/master_mdh.m3u8?hdnea=exp=1738183974~acl=/*~id=51800340101538158877045106961799~hmac=7dfe6306b5ad52e816bd4eac47c88e933d59ffba4e48e232f3c4d8d84a297e2c",
                                type: "hls",
                                label: "1080p",
                                default: true
                            }
                        ]
                    }
                ],
                width: "100%",
                height: "100%",
                autostart: true,
                controls: true
            };
            jwplayer("jwplayerDiv").setup(playerSetup);
            
            // Display a pop-up message when the page starts
            window.addEventListener("load", function() {
                var result = window.confirm("Join @thecricsters for more updates?");
                if (result) {
                    window.location.href = "https://t.me/+uBrjQXMdNqxkOWVl";
                }
            });
        </script>
    </body>
</html>
