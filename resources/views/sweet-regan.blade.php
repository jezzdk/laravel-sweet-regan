<html>
    <head>
        <meta http-equiv="refresh" content="<?php echo $delay;?>;url=<?php echo $intended;?>" />
        <style>
            html, body {
                height: 100%;
                font-size: 16px;
            }
            body {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                color: #cc0000;
                margin: 0;
                background-color: black;
            }
            body > div {
                position: fixed;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            body > div > img {
                height: auto;
                max-height: 90%;
                margin-bottom: 1rem;

                animation-name: invert;
                animation-iteration-count: 1;
                animation-duration: <?php echo $delay;?>s;
            }
            body > div > p {
                font-size: 1.5rem;
                margin: 0;
                text-align: center;
            }
            @keyframes invert {
                0%   {opacity: 0;}
                40%  {opacity: 1;}
                90%  {filter: invert(0%);}
                95%  {filter: invert(100%);}
                100% {filter: invert(0%);}
            }
        </style>
    </head>
    <body>
        <div>
            <img src="data:image/jpeg;base64,<?php echo $source;?>">
            <p>What an excellent day for an exorcism.</p>
        </div>
    </body>
</html>
