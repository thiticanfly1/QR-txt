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
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
        <script>
            async function main() {
                await liff.init({
                    liffID: "1655372314-n5J8R5qo"
                })

                const queryString = decodeURIComponent(window.location.search)
                const params = new URLSearchParams(queryString)
                if (params.get("params") !== null) {
                    document.getElementsByTagName("H1")[0].innerHTML = params.get("param")
                }
            }
            main()
        </script>
    </body>
</html>