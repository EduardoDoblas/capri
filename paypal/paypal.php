<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=ARRcGXLN5tmcP5dunYVtSaiUGxpnl0dKUDhqF1RRgOSqatkPZpy6ZtxsAx5hw_QakVH1b7wd2_s0wX5J&currency=MXN"></script>
</head>
<body>

<div id="paypal-button-container"></div>

<script>
    paypal.Buttons({
        style:{
            color:'blue',
            shape: 'pill',
            lable:'pay'
        },
        createOrder:function(data, actions){
            return actions.order.create({
                purchase_units:[{
                    amount:{
                        value: 65
                    }
                }]
            })
        },

        onApprove:function(data, actions){
            actions.order.capture().then(function (detalles){
                console.log(detalles);
            });
        },

        onCancel:function(data){
            alert("Pago cancelado");
            console.log(data);
        }
    }).render('#paypal-button-container')
</script>
    
</body>
</html>