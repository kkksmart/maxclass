<html>
<head>
  <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
        
      background: #6a62fe;
       background-image:url('https://gm1.ggpht.com/mLLL8Z9BWnPRaXxoruJVQCHdp3bsftWz4hdgGXfV_hgdYoylg9wLHtxXyJqZJvBvoYHv71KORXbCpGk9uFHlb4EaNUM0i34-1C3a8H7Cjzui6XHK9ZS0_C23eLnnu_2l60Aj5XarH_hOrvdnTBOKVrXesOEB3CWNi5MYnDpXUU1WGNrezNlxMln4frqt4HMx_JVOk7oiH1IicYYfVkDpxkrmo4DEdaHmT7DnAZA60ApC3vrExjTcqy8cxnLeYpbPYf90SkYEXFG-euUyEWpriXdceIAe0qPRrk8B3iAWDehAVB0gvsaZ_A4eyYa2Emik0jHZK46fTYyBUifeoNA-Jq7WHTbrN0HOBlmEBxPicJcFzeW7_bKmdEMs-zEMBmeBJutCsLKCUfVQ-072Hc90YgvMBwwiSHH679PWrevvZr7p3au_2hQlHJnblHkJNHVEz-KpcyfmUZ-a1yu58ROUosPrHsgNJ-JXM9QjTbZNzZ5n2M0K2CuVYOyNpwo_kLFsxAivKGPYB2AwnkdqQyGNXAGo-cONk74kkP9MOBoBNJNEGuWCfsZk_BB_tE5zs0h4M90tG4a6LukPOMuZ-hrnb3HzHArNoxTy1PQyixAjs6Mj9HSYUUa77wNHHlDLjpnXNGCFNFAH9sAefoYedllORf3eWo2VuXo4XShk4bBWddf6hnaFWLTeWTDkmdYJ8fB3mzs7uZQJ1GKbVUC_vqO6F1YYDKaqPZn-xVANewEGOAWIB_t2K2YJU6nAxBqT=s0-l75-ft-l75-ft');
      display: flex;
      height: 100vh;
      margin: 0;
      align-items: center;
      justify-content: center;
      padding: 0 50px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
    video {
      margin: 0 50px;
      box-sizing: border-box;
      border-radius: 2px;
      padding: 0;
      background: white;
    }
    .copy {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 16px;
      color: white;
    }
  </style>
</head>
<body>
<div class="copy">Send your URL to a friend to start a video call</div>
  <div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-4">
        <video id="localVideo" autoplay muted></video>
        </div>
        <div class="col-md-4">
        <br>
        </div>
          <div class="col-md-4">
                  <video id="remoteVideo" autoplay></video>
   
        </div>
      </div>
          </div>
    <br>

  <script src="script.js"></script>
</body>
</html>