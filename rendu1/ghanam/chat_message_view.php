<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>

<div class=" w-2/5 h-96 overflow-auto rounded bg-pink-500 p-2">
    <div class="w-fit rounded-md bg-pink-700 text-white p-1 m-1 boder" id="conntent"></div>
   </div>

   <div class="w-2/5 h-1/5 bg-sky-400">
    <input type="text" placeholder="enter message" class="w-4/5 h-14" id="send_message" required>
    <input type="submit" value="send" id="send">
   </div>

   <script>
        setInterval(function() {
            $(document).ready(function(){
            
                $.ajax({
                    "type":"GET",
                    "url":"chat_message_controller.php",
                    success:function(data){
                        $("#conntent").html(data);
                    }
                });
            
        });
        },1);




        $(document).ready(function(){
            $("#send").click(function(){
                var send_message = $("#send_message").val();
                $.ajax({
                    "type":"POST",
                    "url":"chat_message_controller.php",
                    "data":{
                        send_message:send_message
                    },
                    success:function(response){
                        console.log("dkhal hna: ", response);
                        $("#send_message").val('');
                    },
                    error:function(error) {
                        console.log("\n madkhelch: " , error);
                    },
                })
            });
        });
        


        

    </script>
    
</body>
</html>