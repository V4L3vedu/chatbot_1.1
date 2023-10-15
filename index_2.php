<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
       <style>
        :root{
            --light:rgb(247, 247, 247);
            --dark:black;
            
        }
         .mode{ 
            background-color:var(--light);
            color: var(--dark);
        } 
        .size_20{
            height:40px !important;
            width: 40px !important;;
        }
        .blur{
            z-index: 1;
        }
    </style>
</head>

<body class="mode">
    <nav
        class="fixed top-0 z-50 bg-white w-full border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 mode" >
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <a href="https://cissurat.com/" class="flex ml-2 md:mr-24">
                        <img src="data:image/png;base64,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"
                            class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">ChatBot</span>
                    </a>
                </div>
                <i class="bi bi-moon bi-8x"></i>
                <!-- <i class="bi bi-sun"></i> -->
            </div>
    </nav>

    <div class="p-4s bg-white">
        <div class="p-4  rounded-lg dark:border-gray-700 mt-14">
            <div class="overflow-auto md:overflow-scroll flex flex-col" style="height:68vh;margin-bottom:80px">
                <div
                    class="w-full text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 mr-auto flex justify-start w-full">
                    <img src="https://cissurat.com/wp-content/uploads/2018/09/logo-footer.png"
                        class="rounded-full relative " height="90px" width="90px">
                    Hi! Vedant how may I assisted you.
                </div><br><br><br>
                <div
                    class="w-full text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 mr-auto flex justify-end w-full" id="send_text_effect">
                    <p id="chat_value">Hello</p> &ensp;
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd4ZB6B13vCsUxBek3yDavqdwELM4X6xqZErpHjNDEXQ&s"
                        class="rounded-full relative blur" height="90px" width="90px">
                </div>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="bi bi-search" id="svg_1"></i>
                    </span>
                    
                </div>
                <input type="text" class="form-control" id="chat_box" aria-label="Small" aria-describedby="inputGroup-sizing-sm" require>
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="bi-mic" id="svg_2" data-svg="mic"></i></span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $("#chat_box").on("focus",function(){
            $("#svg_1").removeClass("bi-search").addClass("bi-send");
            $("#svg_2").removeClass("bi-mic").addClass("bi-x").attr("data-svg","x");            
        })
        $("#chat_box").on("keyup",function(){
            // var voice = new SpeechSynthesisUtterance(); 
            // voice.text=$("#chat_box").val();
            // window.speechSynthesis.speak(voice);
            $("#chat_value").html($("#chat_box").val());

        })
        $("#svg_1").on("click",function(){
            $("#send_text_effect").removeClass("dark:text-gray-400").removeClass("text-gray-500");
            $("chat_value").addClass("")
        })

        $("#svg_2").on("click",function(){
            if($("#svg_2").attr("data-svg")=="x"){
                $("#chat_box").val(" ");
                $("#chat_value").html(" ");
            }else{
                var recognition = new webkitSpeechRecognition();
                recognition.lang = "en-GB";
                recognition.onstart = function() {
                    console.log("Recognition started");
                };
                recognition.onend = function() {
                    console.log("Recognition ended");
                };
                recognition.onresult = function(event) {
                    $("#chat_box").val(event.results[0][0].transcript);
                };
                recognition.start()
                $("#svg_1").removeClass("bi-search").addClass("bi-send");
                $("#svg_2").removeClass("bi-mic").addClass("bi-x").attr("data-svg","x");
            }
        })

    </script>

</body>

</html>