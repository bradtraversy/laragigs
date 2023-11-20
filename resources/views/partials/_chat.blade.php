    <!--chatting  start-->
    <section class="sidebar" id="sidebar">
        <div class="container">

            <a href="#" class="chat" id="chat"><i class="fas fa-commenting"></i></a>
        </div>
    </section>

    <section class="chatting" id="chatting">
        <div class="wrapper" id="wrapper">

            <div class="title">
                <div id="closeBtn"><i class="fa fa-x"></i></div>
                <span>Talk to us</span>
            </div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>

                <div class="msg-header">

                    <p>Hello there, How can i help?</p>
                </div>

            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input type="text" id="data" placeholder="Say Something...">
                <button id="send-btn">Send</button>
            </div>
        </div>
        </div>
    </section>

    @section('scripts')
    <script>
         $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
@stop
