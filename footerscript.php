 <!-- SCRIPTING-->
    <script src="JS\script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".contactpop").click(function(){
            $('.contactpop_hover').show();
        });
 
      $('.contactpop_close').click(function(){
        $('.contactpop_hover').hide();
        });
	});

</script>

</body>

</html>