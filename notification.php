@if(Session::has('success'))
        <div class="message" style="background: #55BB6F;">
            <i class="far fa-check-circle fa-lg"></i> &nbsp; {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="message" style="background:#dd4b39;">
            <span class="fa fa-exclamation-circle fa-lg"></span> &nbsp; {{Session::get('error')}}
        </div>
    @endif

    @if( Session::has('error') || Session::has('success') )
        <script>
            $(document).ready(function(){        
                 $(".message").show().delay(3000).queue(function(n) {
                    $(this).fadeOut('slow'); n();
                });       
            });
        </script>
    @endif
    <style type="text/css">
        .message{padding: 15px 30px 15px 40px;top:0px;right:0;position: fixed;z-index: 1030;color:#fff;border-top-left-radius: 5px;border-bottom-left-radius: 5px; }
    </style>
