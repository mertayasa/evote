<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form id="emailForm">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
        </div>
        <div class="form-group">
            <input type="hidden" name="pledge_verified" id="pledge_verified" value="yes" class="form-control">
            <label for="pledge_verified"> Check This </label>
        </div>
    </form>

    <h1 id="response"></h1>

    <script src="{{ url('dis/scripts/jQuery3.5.1.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(event){
        // event.preventDefault();

        id = $('#id').val();
        pledge_verified = $('#pledge_verified').val();

        $.ajax({
            url: "/sentemail/verifypledge",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                id:id,
                pledge_verified:pledge_verified,
            },
                success:function(response){
                    document.getElementById("emailForm").remove();
                    document.getElementById("response").innerHTML="Thanks";
                },
            });
        });
    </script>

</body>
</html>