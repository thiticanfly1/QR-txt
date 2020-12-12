<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial,maximum-scale=1,user-scalable=0,viewport-fit=cover">

        <title>QR CODE</title>
    </head>
    <body>
        <H1>HELLO 1</H1>
        <button id="btnQR" onclick="window.location='https://line.me/R/nv/QRCodeReader'">OPEN QR READER</button>
        <script src="https://static.line.scdn.net/liff/edge/versions/2.4.0/sdk.js"></script>
        <script>
            anync

            function main() {
                await liff.init {
                    {
                        liffID: "1653575653-0mBz0yAJ"
                    }
                }

                const queryString = decodeURIComponent {
                    window.location.search
                }
                const params = new URLSearchParams {
                    queryString
                }
                if (params.get("params") !== null) {
                    document.getElementsByTagName {
                        "h1"
                    }[0].innerHTML = params.get("param")
                }
            }
            main()
        </script>
    </body>
</html>