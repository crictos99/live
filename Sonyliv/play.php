<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Watch Match</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #000;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }

    #jwplayerDiv {
      width: 100%;
      height: 100%;
      position: absolute;
    }
  </style>
  <script src="https://content.jwplatform.com/libraries/SAHhwvZq.js"></script>
</head>
<body>
  <div id="jwplayerDiv"></div>
  <script>
    function getQueryParam(param) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(param);
    }

    const dai_url = getQueryParam("dai_url");

    function interceptNetworkRequests() {
      const originalOpen = XMLHttpRequest.prototype.open;
      XMLHttpRequest.prototype.open = function(method, url) {
        if (url.includes('sonydaimenew.akamaized.net')) {
          url = url.replace('sonydaimenew.akamaized.net', 'sony.cricsterspkl.io/event.php');
        }
        if (url.includes('sonypartnersdaimenew.akamaized.net')) {
          url = url.replace('sonypartnersdaimenew.akamaized.net', 'sony.cricsterspkl.io/event.php');
        }
        return originalOpen.apply(this, arguments);
      };
    }

    interceptNetworkRequests();

    if (dai_url) {
      jwplayer("jwplayerDiv").setup({
        playlist: [{
          title: "Live Match",
          description: "You're Watching",
          sources: [{
            file: dai_url,
            type: "hls",
            label: "HD",
            default: true
          }]
        }],
        width: "100%",
        height: "100%",
        autostart: true,
        controls: true
      });
    } else {
      alert("No video URL found. Please go back and select a match.");
    }

    window.addEventListener("load", () => {
      const result = window.confirm("Join @thecricsters for more updates?");
      if (result) window.location.href = "https://t.me/+uBrjQXMdNqxkOWVl";
    });
  </script>
</body>
</html>
