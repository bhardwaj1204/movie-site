<!DOCTYPE html>
<html>
<head>
    <title>sr</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">-->
</head>
<body>
    <div class="container " style="max-width: 555px">
        
        <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off"
            placeholder="Search ...">
        <div id="search_result"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'ajax-live-search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');
                            /*$("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });*/
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
			$("#lnkdata").click(function()
			{
				alert(this.prop("href"));
			});
        });
    </script>
</body>
</html>